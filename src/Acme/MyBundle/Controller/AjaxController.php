<?php

namespace Acme\MyBundle\Controller;

use Doctrine\ORM\Tools\Pagination\Paginator;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Symfony\Component\HttpFoundation;

class AjaxController extends Controller {
	public function indexAction(Request $request) {
		$price_min = $request->get ( 'pmin', 0 );
		$price_max = $request->get ( 'pmax', 100000000 );
		$area_min = $request->get ( 'amin', 0 );
		$area_max = $request->get ( 'amax', 100000000 );
		$bed_min = $request->get ( 'bmin', 0 );
		$bed_max = $request->get ( 'bmax', 100000000 );
		$area = $request->get ( 'area', 'all' );
		$page = $request->get ( 'page', 1 );
		$page_size = 16;
		$em = $this->getDoctrine ()->getManager ();
		$cmd = 'SELECT h FROM AcmeMyBundle:Home h JOIN h.prices p ORDER BY p.updated DESC LIMIT 1 WHERE p.price > :price_min AND p.price < :price_max';
		if ($area == 'all') {
			$qb = $em->createQuery ( 'SELECT m FROM AcmeMyBundle:HomeModel m JOIN m.homes h WHERE h IN (SELECT h2 FROM AcmeMyBundle:Home h2 JOIN h2.prices p WHERE p.price > :price_min AND p.price < :price_max ORDER BY p.updated DESC) AND m.square_feet > :area_min AND m.square_feet < :area_max AND m.num_beds > :bed_min AND m.num_beds < :bed_max' )->setParameter ( 'area_min', $area_min )->setParameter ( 'area_max', $area_max )->setParameter ( 'bed_min', $bed_min )->setParameter ( 'bed_max', $bed_max )->setParameter ( 'price_max', $price_max )->setParameter ( 'price_min', $price_min );
		} else {
			$qb = $em->createQuery ( 'SELECT m FROM AcmeMyBundle:HomeModel m JOIN m.homes h WHERE m.area = :area AND h is NOT NULL AND m.square_feet > :area_min AND m.square_feet < :area_max AND m.num_beds > :bed_min AND m.num_beds < :bed_max' )->setParameter ( 'area_min', $area_min )->setParameter ( 'area_max', $area_max )->setParameter ( 'bed_min', $bed_min )->setParameter ( 'bed_max', $bed_max )->setParameter ( 'area', $area );
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
		$page_lower = max ( $page - 5, 1 );
		$page_upper = min ( $page + 5, $page_count );
		return $this->render ( 'AcmeMyBundle:Default:index.html.twig', array (
				'area' => $area,
				'models' => $paginator,
				'starting_prices' => $starting_price_array,
				'page' => $page,
				'page_array' => range ( $page_lower, $page_upper ) 
		) );
	}
}
