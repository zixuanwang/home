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
			$images = $model->getImages ();
		}
		$floorplans = $model->getFloorplans ();
		// get communities that have the model
		$communities = array ();
		$prices = array ();
		$homes = $model->getHomes ();
		foreach ( $homes as $home ) {
			$community = $home->getCommunity ();
			$price = $home->getPrices ()[0]->getPrice ();
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
		$map_array = array ();
		foreach ( $communities as $community ) {
			$latitude = $community->getLatitude ();
			$longitude = $community->getLongitude ();
			if ($latitude != null && $longitude != null) {
				$map_center ['latitude'] += $latitude;
				$map_center ['longitude'] += $longitude;
				$map_array [] = array (
						'latitude' => $latitude,
						'longitude' => $longitude 
				);
			}
		}
		if (! empty ( $communities )) {
			$n = count ( $communities );
			$map_center ['latitude'] /= $n;
			$map_center ['longitude'] /= $n;
		}
		$builder = $model->getBuilder();
		if ($builder == 'Lennar'){
			$builder_logo = 'lennar.png';
		}
		if ($builder == 'Pulte Homes'){
			$builder_logo = 'pulte.png';
		}
		return $this->render ( 'AcmeMyBundle:Default:model.show.html.twig', array (
				'images' => $images,
				'floorplans' => $floorplans,
				'model' => $model,
				'communities' => $communities,
				'prices' => $prices,
				'map_center' => $map_center,
				'map_array' => $map_array,
				'builder_logo' => $builder_logo
		) );
	}
}
