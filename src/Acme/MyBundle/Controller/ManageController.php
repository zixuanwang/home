<?php

namespace Acme\MyBundle\Controller;

use Acme\MyBundle\Entity\Album;
use Acme\MyBundle\Entity\Builder;
use Acme\MyBundle\Entity\Community;
use Acme\MyBundle\Entity\Photo;
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
	private function addPhoto() {
		$photo = new Photo ();
		$form = $this->createFormBuilder ( $photo )->add ( 'title', 'text' )->add ( 'file', 'file', array (
				'multiple' => TRUE 
		) )->add ( 'save', 'submit', array (
				'label' => 'Add Photo' 
		) )->getForm ();
		$request = Request::createFromGlobals ();
		$form->handleRequest ( $request );
		if ($form->isValid ()) {
			$b = $form->getData ();
			$em = $this->getDoctrine ()->getManager ();
			$em->persist ( $b );
			$em->flush ();
		}
		return $this->render ( 'AcmeMyBundle:Manage:photo.html.twig', array (
				'form' => $form->createView () 
		) );
	}
	private function addAlbum() {
		$upload_filenames = array ();
		$valid_formats = array (
				"jpg",
				"png",
				"gif",
				"bmp" 
		);
		$max_file_size = 4096 * 1000;
		$path = "uploads/";
		if (isset ( $_POST ) and $_SERVER ['REQUEST_METHOD'] == "POST") {
			// Loop $_FILES to exeicute all files
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
							$upload_filenames [] = $filename;
						}
					}
				}
			}
			return $this->render ( 'AcmeMyBundle:Manage:album.show.html.twig', array (
					'filenames' => $upload_filenames 
			) );
		} else {
			return $this->render ( 'AcmeMyBundle:Manage:album.html.twig' );
		}
	}
}
