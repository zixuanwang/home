<?php

namespace Acme\MyBundle\Controller;

use Acme\MyBundle\Entity\HomeModel;
use Doctrine\ORM\Tools\Pagination\Paginator;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class HomeController extends Controller {
	/**
	 * @Route("/home/{area}/{page}")
	 */
	public function indexAction($area = 'all', $page = 1) {
		$page_size = 16;
		$repository = $this->getDoctrine ()->getRepository ( 'AcmeMyBundle:HomeModel' );
		if ($area == 'all') {
			$qb = $repository->createQueryBuilder ( 'p' )->select ( 'p' )->leftJoin ( 'p.homes', 'h' )->where ( 'h is NOT NULL' );
		} else {
			$qb = $repository->createQueryBuilder ( 'p' )->select ( 'p' )->leftJoin ( 'p.homes', 'h' )->where ( 'p.area = :area AND h is NOT NULL' )->setParameter ( 'area', $area );
		}
		$paginator = new Paginator ( $qb );
		$total_count = count ( $paginator );
		$page_count = ceil ( $total_count / $page_size );
		$paginator->getQuery ()->setFirstResult ( ($page - 1) * $page_size )->setMaxResults ( $page_size );
		$starting_price_array = array ();
		foreach ( $paginator as $model ) {
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
				'area' => $area,
				'models' => $paginator,
				'starting_prices' => $starting_price_array,
				'page' => $page,
				'page_array' => range ( 1, $page_count ) 
		) );
	}
}
