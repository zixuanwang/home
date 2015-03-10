<?php

namespace Acme\MyBundle\Controller;

use Acme\MyBundle\Lib\HomePost;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class HomeController extends Controller
{
    public function indexAction()
    {
    	// select all home models
    	$repository = $this->getDoctrine()
    	->getRepository('AcmeMyBundle:HomeModel');
    	$query = $repository->createQueryBuilder('p')
    	->orderBy('p.updated', 'DESC')
    	->getQuery();
    	$models = $query->getResult();
    	return $this->render ( 'AcmeMyBundle:Default:index.html.twig', array('models' => $models) );
    }
}
