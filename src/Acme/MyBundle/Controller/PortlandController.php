<?php

namespace Acme\MyBundle\Controller;

use Acme\MyBundle\Lib\HomePost;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class PortlandController extends Controller {
	public function indexAction() {
		// select all home models
		$repository = $this->getDoctrine ()->getRepository ( 'AcmeMyBundle:HomeModel' );
		$models = $repository->findBy ( array (
				'area' => 'portland' 
		), array (
				'updated' => 'DESC' 
		) );
		$starting_price_array = array ();
		foreach ( $models as $model ) {
			$id = $model->getId ();
			$price_array = array ();
			$homes = $model->getHomes ();
			foreach ( $homes as $home ) {
				$price_array [] = $home->getPrices ()[0]->getPrice ();
			}
			if (! empty ( $price_array )) {
				$min_price = min ( $price_array );
				$starting_price_array [$id] = $min_price;
			} else {
				$starting_price_array [$id] = '';
			}
		}
		return $this->render ( 'AcmeMyBundle:Default:portland.html.twig', array (
				'models' => $models,
				'starting_prices' => $starting_price_array 
		) );
	}
}
