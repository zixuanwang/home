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
		// get communities that have the model
		$communities = array ();
		$prices = array ();
		$homes = $model->getHomes ();
		foreach ( $homes as $home ) {
			$community = $home->getCommunity ();
			$price = $home->getPrice ();
			$communities [$community->getId ()] = $community;
			if (! isset ( $prices [$community->getId ()] )) {
				$prices [$community->getId ()] = $price;
			} else {
				$prices [$community->getId ()] = min ( $price, $prices [$community->getId ()] );
			}
		}
		$map_center = array ();
		$map_center ['latitude'] = 0;
		$map_center ['longitude'] = 0;
		foreach ( $communities as $community ) {
			$map_center ['latitude'] += $community->getLatitude ();
			$map_center ['longitude'] += $community->getLongitude ();
		}
		if (! empty ( $communities )) {
			$n = count ( $communities );
			$map_center ['latitude'] /= $n;
			$map_center ['longitude'] /= $n;
		}
		return $this->render ( 'AcmeMyBundle:Default:model.show.html.twig', array (
				'images' => $images,
				'floorplans' => $floorplans,
				'model' => $model,
				'communities' => $communities,
				'prices' => $prices,
				'map_center' => $map_center 
		) );
	}
}
