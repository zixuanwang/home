<?php

namespace Acme\MyBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class CommunityController extends Controller {
	public function indexAction($id) {
		$repository = $this->getDoctrine ()->getRepository ( 'AcmeMyBundle:Community' );
		$community = $repository->find ( $id );
		$homes = $community->getHomes ();
		return $this->render ( 'AcmeMyBundle:Default:community.show.html.twig', array (
				'homes' => $homes,
				'community' => $community 
		) );
	}
}
