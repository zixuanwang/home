<?php

namespace Acme\MyBundle\Lib;

use Acme\MyBundle\Entity\Community;
use Acme\MyBundle\Entity\Home;
use Acme\MyBundle\Entity\HomeModel;
use Acme\MyBundle\Entity\Photo;
use Acme\MyBundle\Entity\Price;

class Parser {
	public function __construct($entity_manager) {
		$this->em = $entity_manager;
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
				'zipcode' => $home->getZipcode () 
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
	private $em;
}