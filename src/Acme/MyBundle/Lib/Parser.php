<?php

namespace Acme\MyBundle\Lib;

use Acme\MyBundle\Entity\Community;
use Acme\MyBundle\Entity\Home;
use Acme\MyBundle\Entity\HomeModel;
use Acme\MyBundle\Entity\Photo;
use Acme\MyBundle\Entity\Price;
use Acme\MyBundle\Lib\Utility;

class Parser {
	public function __construct($entity_manager) {
		$this->em = $entity_manager;
		$this->root_path = __DIR__ . '/../../../../web';
	}
	public function curl_get_contents($url, $json_string = '') {
		if (empty ( $json_string )) {
			$ch = curl_init ();
			$agent = 'Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.1; SV1; .NET CLR 1.0.3705; .NET CLR 1.1.4322)';
			curl_setopt ( $ch, CURLOPT_URL, $url );
			curl_setopt ( $ch, CURLOPT_HEADER, true );
			curl_setopt ( $ch, CURLOPT_USERAGENT, $agent );
			curl_setopt ( $ch, CURLOPT_RETURNTRANSFER, true );
			curl_setopt ( $ch, CURLOPT_HTTPAUTH, CURLAUTH_ANY );
			curl_setopt ( $ch, CURLOPT_FOLLOWLOCATION, true );
			curl_setopt ( $ch, CURLOPT_SSL_VERIFYHOST, false );
			curl_setopt ( $ch, CURLOPT_SSL_VERIFYPEER, false );
			$result = curl_exec ( $ch );
			curl_close ( $ch );
		} else {
			$ch = curl_init ( $url );
			curl_setopt ( $ch, CURLOPT_CUSTOMREQUEST, "POST" );
			curl_setopt ( $ch, CURLOPT_POSTFIELDS, $json_string );
			curl_setopt ( $ch, CURLOPT_RETURNTRANSFER, true );
			curl_setopt ( $ch, CURLOPT_HTTPHEADER, array (
					'Content-Type: application/json',
					'Content-Length: ' . strlen ( $json_string ) 
			) );
			$result = curl_exec ( $ch );
			curl_close ( $ch );
		}
		return $result;
	}
	/**
	 * this function save the image from the url to the local file system
	 * images are renamed to a unique name and the unique name is returned.
	 */
	public function save_image($url) {
		$repository = $this->em->getRepository ( 'AcmeMyBundle:Photo' );
		$saved_photo = $repository->findOneBy ( array (
				'url' => $url 
		) );
		if ($saved_photo == null) {
			// skip the image we cannot download
			try {
				$new_url = str_replace ( ' ', '%20', $url );
				$one_filename = sha1 ( uniqid ( mt_rand (), true ) );
				$local_path = $this->root_path . '/uploads/' . $one_filename;
				copy ( $new_url, $local_path );
				switch (exif_imagetype ( $local_path )) {
					case IMAGETYPE_JPEG :
						rename ( $local_path, $local_path . '.jpg' );
						break;
					case IMAGETYPE_PNG :
						rename ( $local_path, $local_path . '.png' );
						exec ( 'convert ' . $local_path . '.png ' . $local_path . '.jpg' );
						break;
					default :
						throw new \Exception ( 'unsupported image format.' );
				}
				$md5_string = md5_file ( $local_path . '.jpg' );
				rename ( $local_path . '.jpg', $this->root_path . '/uploads/' . $md5_string . '.jpg' );
				return $md5_string;
			} catch ( \Exception $e ) {
				echo "error in copying " . $url . "\r\n";
			}
			return '';
		}
		return $saved_photo->getPath ();
	}
	public function save_file($url, $ext) {
		try {
			$new_url = str_replace ( ' ', '%20', $url );
			$one_filename = sha1 ( uniqid ( mt_rand (), true ) );
			$local_path = $this->root_path . '/uploads/' . $one_filename . $ext;
			copy ( $new_url, $local_path );
			$md5_string = md5_file ( $local_path );
			rename ( $local_path, $this->root_path . '/uploads/' . $md5_string . $ext );
		} catch ( \Exception $e ) {
			echo "error in copying " . $url . "\r\n";
			return '';
		}
		return $md5_string . $ext;
	}
	public function add_photo($photo) {
		$repository = $this->em->getRepository ( 'AcmeMyBundle:Photo' );
		$saved_photo = $repository->findOneBy ( array (
				'path' => $photo->getPath () 
		) );
		$p = null;
		if ($saved_photo == null) {
			// save the new photo
			$p = $photo;
		} else {
			// update the saved photo
			$saved_photo->setName ( $photo->getName () );
			$saved_photo->setUrl ( $photo->getUrl () );
			$p = $saved_photo;
		}
		$p->setUpdated ( new \DateTime () );
		$this->em->persist ( $p );
		$this->em->flush ();
		return $p;
	}
	/*
	 * If two communities are in the same state, have the same name,
	 * same builder, same address and same city we consider they are the same community.
	 */
	public function add_community($community) {
		$repository = $this->em->getRepository ( 'AcmeMyBundle:Community' );
		$saved_community = $repository->findOneBy ( array (
				'address' => $community->getAddress (),
				'city' => $community->getCity (),
				'state' => $community->getState (),
				'name' => $community->getName (),
				'builder' => $community->getBuilder () 
		) );
		$c = null;
		if ($saved_community == null) {
			$c = $community;
		} else {
			$c = $saved_community;
		}
		$facades = $community->getFacades ()->toArray ();
		$unique_facades = array_unique ( $facades );
		$c_facades = $c->getFacades ();
		foreach ( $unique_facades as $facade ) {
			if (! $this->is_photo_in_array ( $facade, $c_facades )) {
				$p = $this->add_photo ( $facade );
				$c->addFacade ( $p );
			}
		}
		if ($c->getLongitude () == null || $c->getLatitude () == null) {
			// get latitude and longitude from Bing map.
			$lat_long = Utility::address_to_latlong ( $c->getAddress (), $c->getCity (), $c->getState (), $c->getZipcode () );
			if (! empty ( $lat_long )) {
				$c->setLatitude ( $lat_long [0] );
				$c->setLongitude ( $lat_long [1] );
			}
		}
		$c->setUpdated ( new \DateTime () );
		$this->em->persist ( $c );
		$this->em->flush ();
		return $c;
	}
	
	/*
	 * If two home models are in the same state, have the same name,
	 * same builder, same square feet, same bedrooms, bathrooms, we consider
	 * they are the same model.
	 */
	public function add_model($model) {
		$repository = $this->em->getRepository ( 'AcmeMyBundle:HomeModel' );
		$saved_model = $repository->findOneBy ( array (
				'name' => $model->getName (),
				'builder' => $model->getBuilder (),
				'square_feet' => $model->getSquareFeet (),
				'num_beds' => $model->getNumBeds (),
				'num_baths' => $model->getNumBaths () 
		) );
		$m = null;
		if ($saved_model == null) {
			$m = $model;
		} else {
			$m = $saved_model;
		}
		$unique_facades = array_unique ( $model->getFacades ()->toArray () );
		$unique_floorplans = array_unique ( $model->getFloorplans ()->toArray () );
		$unique_images = array_unique ( $model->getImages ()->toArray () );
		if (empty ( $unique_facades ) || empty ( $unique_floorplans )) {
			return null;
		}
		$m_facades = $m->getFacades ();
		$m_floorplans = $m->getFloorplans ();
		$m_images = $m->getImages ();
		foreach ( $unique_facades as $i ) {
			if (! $this->is_photo_in_array ( $i, $m_facades )) {
				if ($m->getId () == 122 && $i == '2b788a36d8e7c2458d7ed280c5781616') {
					$haha = 'temp';
					echo $haha;
				}
				$p = $this->add_photo ( $i );
				$m->addFacade ( $p );
			}
		}
		foreach ( $unique_floorplans as $i ) {
			if (! $this->is_photo_in_array ( $i, $m_floorplans )) {
				$p = $this->add_photo ( $i );
				$m->addFloorplan ( $p );
			}
		}
		foreach ( $unique_images as $i ) {
			if (! $this->is_photo_in_array ( $i, $m_images )) {
				$p = $this->add_photo ( $i );
				$m->addImage ( $p );
			}
		}
		$this->em->persist ( $m );
		$this->em->flush ();
		return $m;
	}
	
	/*
	 * If two home models have the same address and zipcode, we consider
	 * they are the same model.
	 */
	public function add_home($home) {
		$repository = $this->em->getRepository ( 'AcmeMyBundle:Home' );
		$saved_home = $repository->findOneBy ( array (
				'address' => $home->getAddress (),
				'zipcode' => $home->getZipcode (),
				'home_model' => $home->getHomeModel () 
		) );
		$h = null;
		if ($saved_home == null) {
			$h = $home;
		} else {
			$h = $saved_home;
			if ($h->getPrices ()[0]->getPrice () != $home->getPrices ()[0]->getPrice ()) {
				$h->addPrice ( $home->getPrices ()[0] );
			}
		}
		$h->setUpdated ( new \DateTime () );
		$h->getPrices ()[0]->setHome ( $h );
		$this->em->persist ( $h->getPrices ()[0] );
		$this->em->persist ( $h );
		$this->em->flush ();
		return $h;
	}
	public function is_photo_in_array($needle, $haystack) {
		foreach ( $haystack as $item ) {
			if ($item->getPath () == $needle->getPath ()) {
				return true;
			}
		}
		return false;
	}
	/*
	 * If two home models have the same name and in the same state, we consider
	 * they are the same school.
	 */
	public function add_school($school) {
		$repository = $this->em->getRepository ( 'AcmeMyBundle:School' );
		$saved_school = $repository->findOneBy ( array (
				'name' => $school->getName (),
				'state' => $school->getState () 
		) );
		$s = null;
		if ($saved_school == null) {
			try {
				$s = $school;
				// query greatschools.org API
				$key = '6nx7p1nfibuutxapl3vkmwxx';
				$state = $school->getState ();
				$query_url = 'http://api.greatschools.org/search/schools?key=' . $key . '&state=' . $state . '&q=' . urlencode ( $school->getName () ) . '&limit=1';
				$xml = file_get_contents ( $query_url );
				$parsed_xml = simplexml_load_string ( $xml );
				if ($parsed_xml === false) {
					throw new \Exception ( 'error in parsing school xml' );
				}
				if (! isset ( $parsed_xml->school->gsId )) {
					throw new \Exception ( 'school xml is empty and query name is: ' . $school->getName () );
				}
				$s->setAddress ( ( string ) $parsed_xml->school->address );
				$s->setCity ( ( string ) $parsed_xml->school->city );
				$s->setDistrict ( ( string ) $parsed_xml->school->district );
				$s->setGradeRange ( ( string ) $parsed_xml->school->gradeRange );
				$s->setGsId ( ( string ) $parsed_xml->school->gsId );
				$s->setGsRating ( ( string ) $parsed_xml->school->gsRating );
				$s->setLatitude ( ( string ) $parsed_xml->school->lat );
				$s->setLongitude ( ( string ) $parsed_xml->school->lon );
				$s->setParentRating ( ( string ) $parsed_xml->school->parentRating );
				$s->setType ( ( string ) $parsed_xml->school->type );
				// query census data
				$query_url = 'http://api.greatschools.org/school/census/' . $state . '/' . $s->getGsId () . '?key=' . $key;
				$xml = file_get_contents ( $query_url );
				$parsed_xml = simplexml_load_string ( $xml );
				$s->setEnrollment ( ( string ) $parsed_xml->enrollment );
				$s->setStudentTeacherRatio ( ( string ) $parsed_xml->studentTeacherRatio );
				// TODO: add races
			} catch ( \Exception $e ) {
				echo $e->getMessage () . "\r\n";
				return null;
			}
		} else {
			$s = $saved_school;
		}
		$this->em->persist ( $s );
		$this->em->flush ();
		return $s;
	}
	private $em;
	private $root_path;
}