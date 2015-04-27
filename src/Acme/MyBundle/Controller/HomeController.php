<?php

namespace Acme\MyBundle\Controller;

use Acme\MyBundle\Entity\HomeModel;
use Doctrine\ORM\Tools\Pagination\Paginator;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Acme\MyBundle\AcmeMyBundle;
use Acme\MyBundle\Lib\Utility;

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
	public function home_searchAction() {
		$request = $this->getRequest ();
		$price_index = $request->get ( 'p', 0 );
		$sqft_index = $request->get ( 's', 0 );
		$bed_index = $request->get ( 'b', 0 );
		$builder_index = $request->get ( 'bu', 0 );
		$price_array = array (
				0 => array (
						0,
						1000000000 
				),
				1 => array (
						0,
						Utility::rmb_to_dollor ( 2000000 ) 
				),
				2 => array (
						Utility::rmb_to_dollor ( 2000000 ),
						Utility::rmb_to_dollor ( 5000000 ) 
				),
				3 => array (
						Utility::rmb_to_dollor ( 5000000 ),
						1000000000 
				) 
		);
		$sqft_array = array (
				0 => array (
						0,
						1000000000 
				),
				1 => array (
						0,
						Utility::sqmt_to_sqft ( 200 ) 
				),
				2 => array (
						Utility::sqmt_to_sqft ( 200 ),
						Utility::sqmt_to_sqft ( 300 ) 
				),
				3 => array (
						Utility::sqmt_to_sqft ( 300 ),
						Utility::sqmt_to_sqft ( 400 ) 
				),
				4 => array (
						Utility::sqmt_to_sqft ( 400 ),
						1000000000 
				) 
		);
		$bed_array = array (
				0 => array (
						0,
						1000000000 
				),
				1 => array (
						0,
						3 
				),
				2 => array (
						3,
						5 
				),
				3 => array (
						5,
						1000000000 
				) 
		);
		$builder_array = array (
				0 => '',
				1 => 'Lennar',
				2 => 'Pulte Homes',
				3 => 'D.R. Horton' 
		);
		$area = $request->get ( 'area', 'all' );
		$page = $request->get ( 'page', 1 );
		$page_size = 16;
		$em = $this->getDoctrine ()->getManager ();
		$sql_string = 'SELECT h, p, m FROM AcmeMyBundle:Home h JOIN h.prices p JOIN h.home_model m WHERE p.price >=
					:price_min AND p.price < :price_max AND p.status = :status AND m.square_feet >= :area_min AND
					m.square_feet < :area_max AND m.num_beds >= :bed_min AND m.num_beds < :bed_max';
		if ($area != 'all') {
			$sql_string .= ' AND m.area = :area';
		}
		if ($builder_index != 0) {
			$sql_string .= ' AND m.builder = :builder';
		}
		$qb = $em->createQuery ( $sql_string )->setParameter ( 'price_max', $price_array [$price_index] [1] )->setParameter ( 'price_min', $price_array [$price_index] [0] );
		$qb = $qb->setParameter ( 'status', 'active' )->setParameter ( 'area_min', $sqft_array [$sqft_index] [0] )->setParameter ( 'area_max', $sqft_array [$sqft_index] [1] );
		$qb = $qb->setParameter ( 'bed_min', $bed_array [$bed_index] [0] )->setParameter ( 'bed_max', $bed_array [$bed_index] [1] );
		if ($area != 'all') {
			$qb->setParameter ( 'area', $area );
		}
		if ($builder_index != 0) {
			$qb->setParameter ( 'builder', $builder_array [$builder_index] );
		}
		$paginator = new Paginator ( $qb );
		$total_count = count ( $paginator );
		$page_count = ceil ( $total_count / $page_size );
		$paginator->getQuery ()->setFirstResult ( ($page - 1) * $page_size )->setMaxResults ( $page_size );
		$page_lower = max ( $page - 5, 1 );
		$page_upper = min ( $page + 5, $page_count );
		return $this->render ( 'AcmeMyBundle:Default:search.html.twig', array (
				'area' => $area,
				'homes' => $paginator,
				'page' => $page,
				'page_array' => range ( $page_lower, $page_upper ),
				'price_index' => $price_index,
				'sqft_index' => $sqft_index,
				'bed_index' => $bed_index,
				'builder_index' => $builder_index
		) );
	}
	public function home_detailAction($id) {
		$repository = $this->getDoctrine ()->getRepository ( 'AcmeMyBundle:Home' );
		$home = $repository->find ( $id );
		$price_array = $home->getPrices ();
		if (! empty ( $price_array )) {
			$price = $price_array [0]->getPrice ();
		} else {
			$price = 0;
		}
		$model = $home->getHomeModel ();
		$community = $home->getCommunity ();
		$map_center = array ();
		$map_center ['latitude'] = $community->getLatitude ();
		$map_center ['longitude'] = $community->getLongitude ();
		$builder = $model->getBuilder ();
		if ($builder == 'Lennar') {
			$builder_logo = 'lennar.png';
		}
		if ($builder == 'Pulte Homes') {
			$builder_logo = 'pulte.png';
		}
		return $this->render ( 'AcmeMyBundle:Default:home.show.html.twig', array (
				'model' => $model,
				'community' => $community,
				'price' => $price,
				'map_center' => $map_center,
				'builder_logo' => $builder_logo 
		) );
	}
}
