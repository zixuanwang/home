<?php

namespace Acme\MyBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class BuilderController extends Controller {
	public function indexAction($name) {
		$builder = $this->getDoctrine ()->getRepository ( 'AcmeMyBundle:Builder' )->findOneByName ( $name );
		return $this->render ( 'AcmeMyBundle:Default:builder.show.html.twig', array('builder' => $builder) );
	}
}
