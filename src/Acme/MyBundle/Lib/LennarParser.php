<?php

namespace Acme\MyBundle\Lib;

use Acme\MyBundle\Entity\Album;
use Acme\MyBundle\Entity\Community;
use Acme\MyBundle\Entity\Home;
use Acme\MyBundle\Entity\HomeModel;
use Acme\MyBundle\Entity\Photo;
use Acme\MyBundle\Entity\Acme\MyBundle\Entity;
use Acme\MyBundle\Lib\phpQuery\phpQuery;
use Doctrine\ORM\EntityManager;
use phpQuery_phpQuery;
use Assetic\Exception\Exception;

class LennarParser {
	private function curl_get_contents($url, $json_string) {
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
		return $result;
	}
	public function __construct($entity_manager) {
		$this->builder_name = 'Lennar';
		$this->communities = array ();
		$this->em = $entity_manager;
		$this->home_models = array ();
		$this->root_url = 'http://www.lennar.com';
	}
	/**
	 * this function save the image from the url to the local file system
	 * images are renamed to a unique name and the unique name is returned.
	 */
	public function save_image($url) {
		$new_url = str_replace ( ' ', '%20', $url );
		$one_filename = sha1 ( uniqid ( mt_rand (), true ) );
		$local_path = 'uploads/' . $one_filename . '.jpg';
		// skip the image we cannot download
		if (substr ( $new_url, 0, 1 ) != '/') {
			copy ( $new_url, $local_path );
			$md5_string = md5_file ( $local_path );
			rename ( $local_path, 'uploads/' . $md5_string . '.jpg' );
			return $md5_string;
		}
		return '';
	}
	
	/**
	 * this function fetches images embedded in the model page
	 * an array containing saved image names is returned.
	 */
	public function parse_image($url) {
		// parse html using phpQuery
		$html = file_get_contents ( $url );
		$php_query = new phpQuery_phpQuery ();
		$doc = $php_query->newDocument ( $html );
		// $doc = phpQuery::newDocument ( $html );
		$floorplan_urls = array ();
		$model_urls = array ();
		$facade_urls = array ();
		foreach ( $doc ['#floorplans li > img'] as $element ) {
			$floorplan_urls [] = pq ( $element )->attr ( 'src' );
		}
		foreach ( $doc ['.scrapbook img'] as $element ) {
			$model_urls [] = pq ( $element )->attr ( 'data-src' );
		}
		foreach ( $doc ['.masthead .SlideImage'] as $element ) {
			$query = pq ( $element );
			if (! empty ( $query->attr ( 'data-src' ) )) {
				$facade_urls [] = $query->attr ( 'data-src' );
			} else {
				$facade_urls [] = $query->attr ( 'src' );
			}
		}
		// save images.
		$images = array ();
		$images ['floorplan'] = array ();
		$images ['model'] = array ();
		$images ['facade'] = array ();
		foreach ( $floorplan_urls as $url ) {
			$name = $this->save_image ( $url );
			if (! empty ( $name ))
				$images ['floorplan'] [] = $name;
		}
		foreach ( $model_urls as $url ) {
			$name = $this->save_image ( $url );
			if (! empty ( $name )) {
				$images ['model'] [] = $name;
			}
		}
		foreach ( $facade_urls as $url ) {
			$name = $this->save_image ( $url );
			if (! empty ( $name )) {
				$images ['facade'] [] = $name;
			}
		}
		return $images;
	}
	public function persist_album($em, $images) {
		$album = new Album ();
		foreach ( $images as $image ) {
			$photo = $this->persist_photo ( $em, $image );
			$photo->setAlbum ( $album );
			$album->addPhoto ( $photo );
		}
		$em->persist ( $album );
		return $album;
	}
	public function persist_photo($em, $image) {
		$photo = new Photo ();
		$photo->setPath ( $image );
		$em->persist ( $photo );
		return $photo;
	}
	
	/**
	 * this function parses the page of seattle.
	 * for example, see ajax queries in http://www.lennar.com/New-Homes/Washington/Seattle
	 */
	public function fetch_seattle() {
		// get facet results
		// construct REST request
		$facet_url = $this->root_url . '/Services/REST/Facets.svc/GetFacetResults';
		$json_string = '{"searchState":{"ctx":"Market","stcd":"WA","mkid":86,"ddmd":"","loc":[0,0,0,0,0,0,0,0,0,0],"sch":[0,0,0,0,0,0,0,0,0,0,0,0,0],"mnpr":[0,0,0,0,0,0,0],"mxpr":[0,0,0,0,0,0,0],"mnsf":[0,0,0,0,0,0],"mxsf":[0,0,0,0,0,0],"bed":[0,0,0],"bat":[0,0,0,0,0],"gar":[0,0],"str":[0,0,0],"mvdt":"No Preference","type":[0,0,0,0],"amen":[0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0],"rad":0,"lat":0,"long":0,"zip":""},"pageState":{"ct":"C","pn":1,"ps":50,"sb":"communityname","so":"asc"}}';
		$facet_result = $this->curl_get_contents ( $facet_url, $json_string );
		$facet_array = json_decode ( $facet_result, true );
		// get community details
		// construct REST request
		$community_url = $this->root_url . '/Services/Rest/SearchMethods.svc/GetCommunityDetails';
		$data_array = array ();
		$data_array ['facetResults'] = array ();
		$community_count = count ( $facet_array ['fr'] );
		$data_array ['pageState'] = array (
				'ct' => 'C',
				'pt' => 'C',
				'sb' => 'communityname',
				'so' => 'asc',
				'pn' => 1,
				'ps' => $community_count,
				'ic' => $community_count,
				'ss' => 0 
		);
		foreach ( $facet_array ['fr'] as $item ) {
			$data_array ['facetResults'] [] = $item;
		}
		$json_string = json_encode ( $data_array );
		$community_result = $this->curl_get_contents ( $community_url, $json_string );
		// delve into each community
		$community_array = json_decode ( $community_result, true );
		$community_repository = $this->em->getRepository ( 'AcmeMyBundle:Community' );
		foreach ( $community_array as $community ) {
			// save community
			$community_entity = $community_repository->findOneBy ( array (
					'city' => $community ['cty'],
					'state' => $community ['sco'],
					'name' => $community ['cnm'],
					'builder' => $this->builder_name 
			) );
			if ($community_entity == NULL) {
				$community_entity = new Community ();
			}
			$community_entity->setBuilder ( $this->builder_name );
			$community_entity->setName ( $community ['cnm'] );
			$community_entity->setAddress ( $community ['add'] );
			$community_entity->setCity ( $community ['cty'] );
			$community_entity->setState ( $community ['sco'] );
			$community_entity->setZipcode ( $community ['zip'] );
			$this->em->persist ( $community_entity );
			$community_id = $community ['cid'];
			$this->fetch_model ( $community_id, $community_entity );
			$this->em->flush ();
		}
	}
	
	/**
	 * this function parses the page of community.
	 * all information within the community are fetched.
	 * for example, see ajax queries in http://www.lennar.com/New-Homes/Washington/Seattle/Bothell/Canton-Ridge
	 */
	public function fetch_model($community_id, $community_entity) {
		$home_url = $this->root_url . '/Services/Rest/SearchMethods.svc/GetHomesTabDetails';
		$data_array = array ();
		$data_array ['CommunityID'] = $community_id;
		$data_array ['pageState'] = array (
				'ct' => 'A',
				'sb' => 'price',
				'pn' => 1,
				'ps' => 50,
				'ad' => true,
				'ss' => 0,
				'ic' => 0,
				'so' => 'asc' 
		);
		$data_array ['tabLocation'] = array (
				'mi' => 0,
				'lat' => 0,
				'long' => 0 
		);
		$json_string = json_encode ( $data_array );
		$model_result = $this->curl_get_contents ( $home_url, $json_string );
		$model_array = json_decode ( $model_result, true );
		$model_repository = $this->em->getRepository ( 'AcmeMyBundle:HomeModel' );
		$new_model = false;
		foreach ( $model_array ['pr'] as $model ) {
			// we use builder name and plan name the check whether this model has been added.
			$model_entity = $model_repository->findOneBy ( array (
					'name' => $model ['plmktnm'],
					'builder' => $this->builder_name 
			) );
			if ($model_entity == NULL) {
				$model_entity = new HomeModel ();
				$new_model = true;
			} else {
				$new_model = false;
			}
			$model_entity->setBuilder ( $this->builder_name );
			$model_entity->setSquareFeet ( $model ['sgft'] );
			$model_entity->setNumBaths ( $model ['bathrm'] );
			$model_entity->setNumBeds ( $model ['bedrm'] );
			$model_entity->setNumGarages ( $model ['gagebay'] );
			$model_entity->setNumStories ( $model ['story'] );
			$model_entity->setName ( $model ['plmktnm'] );
			// fetch images from the web page
			$page_url = $this->root_url . $model ['vtlURL'];
			$images = $this->parse_image ( $page_url );
			// TODO: we only add models with images
			if (! empty ( $images ['facade'] ) && ! empty ( $images ['model'] ) && ! empty ( $images ['floorplan'] )) {
				if ($new_model) {
					$model_entity->addCommunity ( $community_entity );
					$community_entity->addHomeModel ( $model_entity );
				}
				$photo = $this->persist_photo ( $this->em, $images ['facade'] [0] );
				$model_entity->setFacade ( $photo );
				$album = $this->persist_album ( $this->em, $images ['model'] );
				$model_entity->setImages ( $album );
				$album = $this->persist_album ( $this->em, $images ['floorplan'] );
				$model_entity->setFloorplans ( $album );
				$this->em->persist ( $model_entity );
				// fetch home information
				$model_id = $model ['pid'];
				$this->fetch_home ( $community_id, $model_id, $community_entity, $model_entity );
				$this->em->flush ();
			}
		}
	}
	
	/**
	 * this function parses the page of home model.
	 * price and available homes are fetched.
	 * for example, see ajax queries in http://www.lennar.com/New-Homes/Washington/Seattle/Bothell/Canton-Ridge/Bainbridge
	 */
	public function fetch_home($community_id, $plan_id, $community_entity, $model_entity) {
		$home_url = $this->root_url . '/Services/Rest/SearchMethods.svc/GetPlanInventoryTabDetails';
		$data_array = array ();
		$data_array ['CommunityID'] = $community_id;
		$data_array ['PlanID'] = $plan_id;
		$data_array ['pageState'] = array (
				'ct' => 'A',
				'sb' => 'price',
				'pn' => 1,
				'ps' => 50,
				'ad' => true,
				'ss' => 0,
				'ic' => 0,
				'so' => 'asc' 
		);
		$data_array ['tabLocation'] = array (
				'mi' => 0,
				'lat' => 0,
				'long' => 0 
		);
		$json_string = json_encode ( $data_array );
		$home_result = $this->curl_get_contents ( $home_url, $json_string );
		$home_array = json_decode ( $home_result, true );
		$home_repository = $this->em->getRepository ( 'AcmeMyBundle:Home' );
		foreach ( $home_array ['ir'] as $home ) {
			// we use address and zipcode the check whether this home has been added.
			$home_entity = $home_repository->findOneBy ( array (
					'address' => $home ['spdAdd'],
					'zipcode' => $home ['spZip'] 
			) );
			if ($home_entity == NULL) {
				$home_entity = new Home ();
				$home_entity->setCommunity ( $community_entity );
				$home_entity->setHomeModel ( $model_entity );
			}
			$price = $home ['price'];
			$price = str_replace ( '$', '', $price );
			$price = str_replace ( ',', '', $price );
			$home_entity->setPrice ( $price );
			$price_per_foot = floatval ( $price ) / $home ['sgft'];
			$home_entity->setPricePerFoot ( $price_per_foot );
			$home_entity->setAddress ( $home ['spdAdd'] );
			$home_entity->setZipcode ( $home ['spZip'] );
			$this->em->persist ( $home_entity );
		}
	}
	public $builder_name;
	public $communities;
	public $em;
	public $home_models;
	public $root_url;
}