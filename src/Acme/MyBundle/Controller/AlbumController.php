<?php

namespace Acme\MyBundle\Controller;

use Acme\MyBundle\Entity\Album;
use Acme\MyBundle\Entity\Photo;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class AlbumController extends Controller {
	public function indexAction($type) {
		if ($type == 'add') {
			return $this->addAlbum ();
		}
	}
	
	private function addAlbum() {
		$album = new Album();
		$request = Request::createFromGlobals();
		$data = $request->request->all();
		$album->setName($data['album_name']);
		$em = $this->getDoctrine()->getManager();
		$em->persist($album);
		foreach($data as $key => $value){
			if(substr($key, 0, 7) == 'uploads'){
				$photo = new Photo();
				$photo->setName($value);
				$photo->setPath($key);
				$photo->setAlbum($album);
				$em->persist($photo);
			}
		}
		$em->flush();
		return new Response('Album added.');
	}
}
