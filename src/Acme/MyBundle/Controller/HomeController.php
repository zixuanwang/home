<?php

namespace Acme\MyBundle\Controller;

use Acme\MyBundle\Entity\HomeModel;
use Doctrine\ORM\Tools\Pagination\Paginator;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class HomeController extends Controller {
	/**
	 * @Route("/home/{page}", defaults={"page" = 1})
	 */
	public function indexAction($page = 1) {
		$limit = 15;
		$repository = $this->getDoctrine ()->getRepository ( 'AcmeMyBundle:HomeModel' );
		$qb = $repository->createQueryBuilder ( 'p' );
		$qb->setFirstResult ( ($page - 1) * $limit )->setMaxResults ( $limit );
		$models = new Paginator ( $qb );
		// $c = count ( $paginator );
		// $repository = $this->getDoctrine ()->getRepository ( 'AcmeMyBundle:HomeModel' );
		// $query = $repository->createQueryBuilder ( 'p' )->orderBy ( 'p.updated', 'DESC' )->getQuery ();
		// $models = $query->getResult ();
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
		return $this->render ( 'AcmeMyBundle:Default:index.html.twig', array (
				'models' => $models,
				'starting_prices' => $starting_price_array,
				'page' => $page
		) );
	}
}
