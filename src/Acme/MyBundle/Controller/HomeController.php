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
    	$home_posts = array();
    	$models = $query->getResult();
    	foreach ($models as $model){
    		$album = $model->getAlbum();
    		$post = new HomePost();
    		$post->cover_photo = $album->getCover()->getPath();
    		$post->name = $model->getName();
    		$post->post_time = $model->getUpdated()->format('Y-m-d H:i:s');
    		$post->description = $model->getDescription();
    		$home_posts[] = $post;
    	}
    	return $this->render ( 'AcmeMyBundle:Default:index.html.twig', array('home_posts' => $home_posts) );
    }
}
