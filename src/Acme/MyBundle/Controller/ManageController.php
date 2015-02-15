<?php

namespace Acme\MyBundle\Controller;

use Acme\MyBundle\Entity\Album;
use Acme\MyBundle\Entity\Builder;
use Acme\MyBundle\Entity\Community;
use Acme\MyBundle\Entity\HomeModel;
use Acme\MyBundle\Entity\Photo;
use Acme\MyBundle\Lib\Utility;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
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
	}
	private function addBuilder() {
		$builder = new Builder ();
		$form = $this->createFormBuilder ( $builder )->add ( 'name', 'text' )->add ( 'description', 'textarea' )->add ( 'website', 'text' )->add ( 'save', 'submit', array (
				'label' => 'Add Builder' 
		) )->getForm ();
		$request = Request::createFromGlobals ();
		$form->handleRequest ( $request );
		if ($form->isValid ()) {
			$b = $form->getData ();
			$em = $this->getDoctrine ()->getManager ();
			$em->persist ( $b );
			$em->flush ();
		}
		return $this->render ( 'AcmeMyBundle:Manage:builder.html.twig', array (
				'form' => $form->createView () 
		) );
	}
	private function addCommunity() {
		$community = new Community ();
		$form = $this->createFormBuilder ( $community )->add ( 'city', 'text' )->add ( 'county', 'text' )->add ( 'description', 'textarea' )->add ( 'name', 'text' )->add ( 'school_district', 'text' )->add ( 'zipcode', 'text' )->add ( 'save', 'submit', array (
				'label' => 'Add Community' 
		) )->getForm ();
		$request = Request::createFromGlobals ();
		$form->handleRequest ( $request );
		if ($form->isValid ()) {
			$b = $form->getData ();
			$em = $this->getDoctrine ()->getManager ();
			$em->persist ( $b );
			$em->flush ();
		}
		return $this->render ( 'AcmeMyBundle:Manage:community.html.twig', array (
				'form' => $form->createView () 
		) );
	}
	
	private function addAlbum(){
		$request = Request::createFromGlobals();
		$data = $request->request->all();
		$em = $this->getDoctrine()->getManager();
		$album = new Album();
		// get the cover photo
		$cover = $data['cover'];
		$cover_photo = new Photo();
		$cover_photo->setName($data[$cover]);
		$cover_photo->setPath($cover);
		$cover_photo->setAlbum($album);
		$album->setCover($cover_photo);
		$em->persist($cover_photo);
		$model_id = $data['model_id'];
		$home_model = $this->getDoctrine()->getRepository('AcmeMyBundle:HomeModel')->findOneById($model_id);
		foreach($data as $key => $value){
			if($key != 'cover' && $key != 'model_id' && $key != $cover){
				$photo = new Photo();
				$photo->setName($value);
				$photo->setPath($key);
				$photo->setAlbum($album);
				$em->persist($photo);
			}
		}
		$home_model->setAlbum($album);
		$album->setHomeModel($home_model);
		$em->persist($album);
		$em->persist($home_model);
		$em->flush();
		return new Response('Album added.');
	}
	
	private function addModel() {
		if ($this->get ( 'request' )->getMethod () == 'POST') {
			// process form data
			$request = Request::createFromGlobals();
			$data = $request->request->all();
			$home_model = new HomeModel();
			$home_model->setName($data['nameofmodel']);
			$home_model->setNumBeds($data['numofbed']);
			$home_model->setNumBaths($data['numofbath']);
			$home_model->setNumGarages($data['numofgarage']);
			$home_model->setNumStories($data['numofstory']);
			$home_model->setSquareFeet($data['squarefeet']);
			$home_model->setDescription($data['description']);
			$em = $this->getDoctrine()->getManager();
			$em->persist($home_model);
			$em->flush();
			$upload_filenames = array ();
			$valid_formats = array (
					"jpg"
			);
			$max_file_size = 4096 * 1000;
			$path = "uploads/";
			foreach ( $_FILES ['files'] ['name'] as $f => $name ) {
				if ($_FILES ['files'] ['error'] [$f] == 4) {
					continue;
				}
				if ($_FILES ['files'] ['error'] [$f] == 0) {
					if ($_FILES ['files'] ['size'] [$f] > $max_file_size) {
						$message [] = "$name is too large!.";
						continue;
					} elseif (! in_array ( pathinfo ( $name, PATHINFO_EXTENSION ), $valid_formats )) {
						$message [] = "$name is not a valid format";
						continue;
					} else {
						$filename = sha1 ( uniqid ( mt_rand (), true ) );
						$filename = $path . $filename . '.' . substr ( strrchr ( $path . $name, '.' ), 1 );
						if (move_uploaded_file ( $_FILES ["files"] ["tmp_name"] [$f], $filename )) {
							$upload_filenames [] = Utility::get_stem($filename);
						}
					}
				}
			}
			return $this->render ( 'AcmeMyBundle:Manage:album.show.html.twig', array (
					'filenames' => $upload_filenames, 'model_id' => $home_model->getId()
			) );
		}
		return $this->render ( 'AcmeMyBundle:Manage:model.html.twig' );
	}
}
