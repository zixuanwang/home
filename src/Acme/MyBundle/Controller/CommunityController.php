<?php

namespace Acme\MyBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class CommunityController extends Controller {
	public function indexAction($id) {
		$repository = $this->getDoctrine ()->getRepository ( 'AcmeMyBundle:Community' );
		$community = $repository->find ( $id );
		$homes = $community->getHomes ();
		$model_price_array = array ();
		foreach ( $homes as $home ) {
			$model_price_array [] = array (
					'model' => $home->getHomeModel (),
					'price' => $home->getPrices ()[0]->getPrice () 
			);
		}
		return $this->render ( 'AcmeMyBundle:Default:community.show.html.twig', array (
				'model_price_array' => $model_price_array,
				'community' => $community 
		) );
	}
}
