<?php

namespace Acme\MyBundle\Controller;

use Acme\MyBundle\Entity\Builder;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class ManageController extends Controller
{
    public function indexAction($type)
    {
    	$builder = new Builder();
    	$form = $this->createFormBuilder($builder)
    	->add('description', 'text')
    	->add('name', 'text')
    	->add('website', 'text')
    	->add('save', 'submit', array('label' => 'Add Builder'))
    	->getForm();
    	return $this->render('AcmeMyBundle:Manage:builder.html.twig', array(
    			'form' => $form->createView(),
    	));
//         $template = 'AcmeMyBundle:Manage:index.html.twig';
//     	if($type == 'builder'){
//     		return $this->render(
//     				'AcmeMyBundle:Manage:builder.html.twig'
//     		);
//     	}
    }
}
