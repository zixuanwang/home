<?php

namespace Acme\MyBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class ModelController extends Controller {
	public function indexAction($id) {
		$repository = $this->getDoctrine ()->getRepository ( 'AcmeMyBundle:HomeModel' );
		$model = $repository->find ( $id );
		$images = array ();
		if ($model->getImages () != NULL) {
			$images = $model->getImages ()->getPhotos ();
		}
		$floorplans = $model->getFloorplans ()->getPhotos ();
		return $this->render ( 'AcmeMyBundle:Default:model.show.html.twig', array (
				'images' => $images,
				'floorplans' => $floorplans,
				'model' => $model 
		) );
	}
}
