<?php

namespace Acme\MyBundle\Controller;

use Acme\MyBundle\Lib\HomePost;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class SFController extends Controller {
	public function indexAction() {
		// select all home models
		$repository = $this->getDoctrine ()->getRepository ( 'AcmeMyBundle:HomeModel' );
		$models = $repository->findBy ( array (
				'area' => 'sf' 
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
		return $this->render ( 'AcmeMyBundle:Default:sf.html.twig', array (
				'models' => $models,
				'starting_prices' => $starting_price_array 
		) );
	}
}
