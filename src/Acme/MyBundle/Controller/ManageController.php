<?php

namespace Acme\MyBundle\Controller;

use Acme\MyBundle\Entity\Album;
use Acme\MyBundle\Entity\Builder;
use Acme\MyBundle\Entity\Community;
use Acme\MyBundle\Entity\HomeModel;
use Acme\MyBundle\Entity\Photo;
use Acme\MyBundle\Lib\GlobalConfig;
use Acme\MyBundle\Lib\LennarParser;
use Acme\MyBundle\Lib\Utility;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class ManageController extends Controller {
	public function indexAction($type) {
		if ($type == 'builder') {
			return $this->addBuilder ();
		}
		if ($type == 'community') {
			return $this->addCommunity ();
		}
		if ($type == 'photo') {
			return $this->addPhoto ();
		}
		if ($type == 'album') {
			return $this->addAlbum ();
		}
		if ($type == 'model') {
			return $this->addModel ();
		}
		if ($type == 'home') {
			return $this->addHome ();
		}
		if ($type == 'ajax') {
			return $this->handleAjax ();
		}
		if ($type == 'lennar') {
			$parser = new LennarParser ( $this->getDoctrine ()->getManager () );
			$parser->fetch_seattle ();
			return new Response ( 'parse' );
		}
		if ($type == 'test') {
			$repository1 = $this->getDoctrine ()->getManager ()->getRepository ( 'AcmeMyBundle:Photo' );
			$repository2 = $this->getDoctrine ()->getManager ()->getRepository ( 'AcmeMyBundle:HomeModel' );
			$p1 = $repository1->findOneById ( 87 );
			$p2 = $repository1->findOneById ( 88 );
			$m = $repository2->findOneById ( 7 );
			$m->clearFloorplans ();
			$m->addFloorplan ( $p1 );
			$m->addFloorplan ( $p2 );
			$this->getDoctrine ()->getManager ()->persist ( $p1 );
			$this->getDoctrine ()->getManager ()->persist ( $p2 );
			$this->getDoctrine ()->getManager ()->persist ( $m );
			$this->getDoctrine ()->getManager ()->flush ();
			return new Response ( 'hello' );
		}
	}
	private function parseLennar() {
	}
	private function handleAjax() {
		$request = Request::createFromGlobals ();
		$target = $request->query->get ( 'target' );
		if ($target == 'community') {
			$builder = $request->query->get ( 'builder' );
			if (! empty ( $builder )) {
				$repository = $this->getDoctrine ()->getRepository ( 'AcmeMyBundle:Builder' );
				$query = $repository->createQueryBuilder ( 'p' )->where ( 'p.name = :builder' )->setParameter ( 'builder', $builder )->getQuery ();
				$results = $query->getResult ();
				if (count ( $results ) > 0) {
					$models = $results [0]->getHomeModels ();
					$names = array ();
					foreach ( $models as $model ) {
						$names [] = $model->getName ();
						;
					}
					return new JsonResponse ( $names );
				}
			}
		}
	}
	private function addBuilder() {
		if ($this->get ( 'request' )->getMethod () == 'POST') {
			$request = Request::createFromGlobals ();
			$data = $request->request->all ();
			$em = $this->getDoctrine ()->getManager ();
			$builder = new Builder ();
			$builder->setName ( $data ['name'] );
			$builder->setWebsite ( $data ['url'] );
			$builder->setDescription ( $data ['description'] );
			$logofile = $this->upload_file ( $_FILES ['logofile'] )[0];
			$images = $this->upload_file ( $_FILES ['images'] );
			$logo_photo = new Photo ();
			$logo_photo->setName ( $data ['name'] );
			$logo_photo->setPath ( Utility::get_stem ( $logofile ) );
			$builder->setLogo ( $logo_photo );
			$album = new Album ();
			foreach ( $images as $image ) {
				$photo = new Photo ();
				$photo->setPath ( Utility::get_stem ( $image ) );
				$photo->setAlbum ( $album );
				$em->persist ( $photo );
			}
			$builder->setAlbum ( $album );
			$em->persist ( $builder );
			$em->persist ( $album );
			$em->persist ( $logo_photo );
			$em->flush ();
			return new Response ( 'Builder added.' );
		}
		return $this->render ( 'AcmeMyBundle:Manage:builder.html.twig' );
	}
	private function addCommunity() {
		if ($this->get ( 'request' )->getMethod () == 'POST') {
			$request = Request::createFromGlobals ();
			$data = $request->request->all ();
			$em = $this->getDoctrine ()->getManager ();
			$community = new Community ();
			$community->setName ( $data ['name'] );
			$builder = $this->getDoctrine ()->getRepository ( 'AcmeMyBundle:Builder' )->findOneByName ( $data ['builder'] );
			$community->setBuilder ( $builder );
			$builder->addCommunity ( $community );
			$community->setAddress ( $data ['address'] );
			$community->setDescription ( $data ['description'] );
			$community->setCity ( $data ['city'] );
			$community->setCounty ( $data ['county'] );
			$community->setState ( $data ['state'] );
			$community->setZipcode ( $data ['zipcode'] );
			$image_paths = $this->upload_file ( $_FILES ['images'] );
			$map_path = $this->upload_file ( $_FILES ['map'] )[0];
			$album = new Album ();
			$map_photo = new Photo ();
			$map_photo->setPath ( Utility::get_stem ( $map_path ) );
			$community->setMap ( $map_photo );
			foreach ( $image_paths as $image_path ) {
				$photo = new Photo ();
				$photo->setPath ( Utility::get_stem ( $image_path ) );
				$photo->setAlbum ( $album );
				$em->persist ( $photo );
			}
			$community->setAlbum ( $album );
			// save home models
			foreach ( $data ['model'] as $model_name ) {
				$home_model = $this->getDoctrine ()->getRepository ( 'AcmeMyBundle:HomeModel' )->findOneByName ( $model_name );
				$community->addHomeModel ( $home_model );
				$home_model->addCommunity ( $community );
				$em->persist ( $home_model );
			}
			$em->persist ( $builder );
			$em->persist ( $community );
			$em->persist ( $map_photo );
			$em->persist ( $album );
			$em->flush ();
			return new Response ( 'Community added.' );
		}
		$builders = $this->getDoctrine ()->getRepository ( 'AcmeMyBundle:Builder' )->findAll ();
		return $this->render ( 'AcmeMyBundle:Manage:community.html.twig', array (
				'builders' => $builders 
		) );
	}
	private function addAlbum() {
		$request = Request::createFromGlobals ();
		$data = $request->request->all ();
		$em = $this->getDoctrine ()->getManager ();
		$album = new Album ();
		// get the cover photo
		$cover = $data ['cover'];
		$cover_photo = new Photo ();
		$cover_photo->setName ( $data [$cover] );
		$cover_photo->setPath ( $cover );
		$cover_photo->setAlbum ( $album );
		$album->setCover ( $cover_photo );
		$em->persist ( $cover_photo );
		$model_id = $data ['model_id'];
		$home_model = $this->getDoctrine ()->getRepository ( 'AcmeMyBundle:HomeModel' )->findOneById ( $model_id );
		foreach ( $data as $key => $value ) {
			if ($key != 'cover' && $key != 'model_id' && $key != $cover) {
				$photo = new Photo ();
				$photo->setName ( $value );
				$photo->setPath ( $key );
				$photo->setAlbum ( $album );
				$em->persist ( $photo );
			}
		}
		$home_model->setAlbum ( $album );
		$album->setHomeModel ( $home_model );
		$em->persist ( $album );
		$em->persist ( $home_model );
		$em->flush ();
		return new Response ( 'Album added.' );
	}
	private function addModel() {
		if ($this->get ( 'request' )->getMethod () == 'POST') {
			// process form data
			$request = Request::createFromGlobals ();
			$data = $request->request->all ();
			$home_model = new HomeModel ();
			$home_model->setName ( $data ['nameofmodel'] );
			$home_model->setNumBeds ( $data ['numofbed'] );
			$home_model->setNumBaths ( $data ['numofbath'] );
			$home_model->setNumGarages ( $data ['numofgarage'] );
			$home_model->setNumStories ( $data ['numofstory'] );
			$home_model->setSquareFeet ( $data ['squarefeet'] );
			$home_model->setDescription ( $data ['description'] );
			$em = $this->getDoctrine ()->getManager ();
			$facade_path = $this->upload_file ( $_FILES ['facade'] )[0];
			$image_paths = $this->upload_file ( $_FILES ['image'] );
			$floorplan_paths = $this->upload_file ( $_FILES ['floorplan'] );
			// save photos
			$facade_photo = new Photo ();
			$facade_photo->setPath ( Utility::get_stem ( $facade_path ) );
			$home_model->setFacade ( $facade_photo );
			$em->persist ( $facade_photo );
			$image_album = new Album ();
			foreach ( $image_paths as $image_path ) {
				$photo = new Photo ();
				$photo->setAlbum ( $image_album );
				$photo->setPath ( Utility::get_stem ( $image_path ) );
				$em->persist ( $photo );
			}
			$em->persist ( $image_album );
			$floorplan_album = new Album ();
			foreach ( $floorplan_paths as $floorplan_path ) {
				$photo = new Photo ();
				$photo->setAlbum ( $floorplan_album );
				$photo->setPath ( Utility::get_stem ( $floorplan_path ) );
				$em->persist ( $photo );
			}
			// save builder
			$builder_name = $data ['builder'];
			$builder = $this->getDoctrine ()->getRepository ( 'AcmeMyBundle:Builder' )->findOneByName ( $builder_name );
			$home_model->setBuilder ( $builder );
			$em->persist ( $floorplan_album );
			$home_model->setImages ( $image_album );
			$home_model->setFloorplans ( $floorplan_album );
			$em->persist ( $home_model );
			$em->flush ();
			return new Response ( 'Model added.' );
		}
		$builders = $this->getDoctrine ()->getRepository ( 'AcmeMyBundle:Builder' )->findAll ();
		return $this->render ( 'AcmeMyBundle:Manage:model.html.twig', array (
				'builders' => $builders 
		) );
	}
	private function addHome() {
		if ($this->get ( 'request' )->getMethod () == 'GET') {
			$request = Request::createFromGlobals ();
			$city = $request->query->get ( 'city' );
			if (! empty ( $city )) {
				$repository = $this->getDoctrine ()->getRepository ( 'AcmeMyBundle:Community' );
				$query = $repository->createQueryBuilder ( 'p' )->where ( 'p.city = :city' )->setParameter ( 'city', $city )->getQuery ();
				$communities = $query->getResult ();
				return new JsonResponse ( $communities );
			}
		}
		return $this->render ( 'AcmeMyBundle:Manage:home.html.twig' );
	}
	/*
	 * handle the uploaded files
	 * input is $_FILES['image']
	 * output is the array of saved paths including prefix and extension.
	 */
	private function upload_file($file_array) {
		$filename = array ();
		if (is_array ( $file_array ['name'] )) {
			foreach ( $file_array ['name'] as $index => $name ) {
				if ($file_array ['error'] [$index] == 0) {
					$one_filename = sha1 ( uniqid ( mt_rand (), true ) );
					$one_filename = 'uploads/' . $one_filename . '.' . Utility::get_extension ( $file_array ['name'] [$index] );
					move_uploaded_file ( $file_array ['tmp_name'] [$index], $one_filename );
					$filename [] = $one_filename;
				}
			}
		} else {
			if ($file_array ['error'] == 0) {
				$one_filename = sha1 ( uniqid ( mt_rand (), true ) );
				$one_filename = 'uploads/' . $one_filename . '.' . Utility::get_extension ( $file_array ['name'] );
				move_uploaded_file ( $file_array ['tmp_name'], $one_filename );
				$filename [] = $one_filename;
			}
		}
		return $filename;
	}
}
