<?php

namespace Acme\MyBundle\Lib;

use Acme\MyBundle\Entity\Community;
use Acme\MyBundle\Entity\Home;
use Acme\MyBundle\Entity\HomeModel;
use Acme\MyBundle\Entity\Photo;
use Acme\MyBundle\Entity\Price;
use phpQuery_phpQuery;
use Acme\MyBundle\Entity\Acme\MyBundle\Entity;

class PulteParser extends Parser {
	public function __construct($entity_manager) {
		parent::__construct ( $entity_manager );
		$this->builder_name = 'Pulte Homes';
		$this->root_url = 'http://www.pulte.com';
	}
	
	/**
	 * this function parses the page of community.
	 * all information within the community are fetched.
	 * for example, see ajax queries in http://www.pulte.com/new-homes/washington/seattle/index.aspx
	 */
	public function fetch_area($area) {
		if ($area == 'seattle') {
			$url = 'http://www.pulte.com/new-homes/washington/seattle/index.aspx';
		}
		if ($area == 'sf') {
			$url = 'http://www.pulte.com/new-homes/california/northern-california/index.aspx';
		}
		if ($area == 'la') {
			$url = 'http://www.pulte.com/new-homes/california/southern-california/index.aspx';
		}
		if ($area == 'houston') {
			$url = 'http://www.pulte.com/new-homes/texas/the-houston-area/index.aspx';
		}
		if ($area == 'atlanta') {
			$url = 'http://www.pulte.com/new-homes/georgia/the-atlanta-area/index.aspx';
		}
		$html = $this->curl_get_contents ( $url );
		$php_query = new phpQuery_phpQuery ();
		$doc = $php_query->newDocument ( $html );
		foreach ( $doc ['.community-card'] as $element ) {
			$pq_name = pq ( $element )->find ( '.community-name > a' );
			$c_name = pq ( $pq_name )->text ();
			if (! empty ( $c_name )) {
				$c_url = $this->root_url . pq ( pq ( $element )->children ( 'a' ) )->attr ( 'href' );
				$c_html = $this->curl_get_contents ( $c_url );
				$c_doc = $php_query->newDocument ( $c_html );
				$pq_status = $c_doc->find ( '.comm_status_flag' );
				if (strtolower ( pq ( $pq_status )->text () ) == 'sold out') {
					continue;
				}
				$community_entity = new Community ();
				$community_entity->setBuilder ( $this->builder_name );
				$community_entity->setName ( $c_name );
				$c_address1 = pq ( $c_doc->find ( '.header_left_container .comm_address1 span span' ) )->text ();
				$c_address2 = pq ( $c_doc->find ( '.header_left_container .comm_address2 span span' ) )->text ();
				$address2_array = explode ( ',', $c_address2 );
				$city = $address2_array [0];
				$state_zipcode = explode ( ' ', trim ( $address2_array [1] ) );
				$state = $state_zipcode [0];
				$zipcode = substr ( $state_zipcode [1], 0, 5 );
				$community_entity->setAddress ( $c_address1 );
				$community_entity->setCity ( $city );
				$community_entity->setState ( $state );
				$community_entity->setZipcode ( $zipcode );
				$community_entity->setArea ( $area );
				$c = $this->add_community ( $community_entity );
				foreach ( $c_doc->find ( '.plan_container .comm_plan' ) as $pq_model ) {
					$model_facade_url = $this->root_url . pq ( pq ( $pq_model )->find ( '.comm_plan_image_container > img' ) )->attr ( 'src' );
					$model_url = pq ( pq ( $pq_model )->find ( '.comm_plan_view_details' ) )->attr ( 'href' );
					preg_match_all ( "/'(.*?)'/", $model_url, $matches );
					$m_url = $this->root_url . $matches [1] [1];
					$this->fetch_model ( $m_url, $c, $model_facade_url );
				}
			}
		}
	}
	public function fetch_model($url, $community_entity, $model_facade_url) {
		$query = new phpQuery_phpQuery ();
		$html = $this->curl_get_contents ( $url );
		$floorplan_html = $this->curl_get_contents ( str_replace ( 'home-features', 'floor-plans', $url ) );
		$doc = $query->newDocument ( $html );
		$floorplan_doc = $query->newDocument ( $floorplan_html );
		
		$pq_square_feet = $doc->find ( '.header_left_container .plan_sq_ft' );
		$pq_bed_bath = $doc->find ( '.header_left_container .plan_bed_bath' );
		$square_feet = str_replace ( ',', '', explode ( ' ', pq ( $pq_square_feet )->text () )[0] );
		$string_bed_bath = explode ( '|', pq ( $pq_bed_bath )->text () );
		$string_bed = trim ( $string_bed_bath [0] );
		$string_bath = trim ( $string_bed_bath [1] );
		$num_bed = explode ( ' ', $string_bed )[0];
		$num_bath = explode ( ' ', $string_bath )[0];
		$name = pq ( $doc->find ( '.header_left_container .plan_name bold' ) )->text ();
		$model_entity = new HomeModel ();
		$model_entity->setBuilder ( $this->builder_name );
		$model_entity->setSquareFeet ( $square_feet );
		$model_entity->setNumBaths ( $num_bath );
		$model_entity->setNumBeds ( $num_bed );
		$model_entity->setNumGarages ( 0 );
		$model_entity->setNumStories ( 0 );
		$model_entity->setName ( $name );
		$model_entity->setArea ( $community_entity->getArea () );
		foreach ( $doc->find ( '#photo_gallery_plan li a' ) as $pq_model_image ) {
			$image_url = $this->root_url . pq ( $pq_model_image )->attr ( 'href' );
			$path = $this->save_image ( $image_url );
			if (! empty ( $path )) {
				$photo = new Photo ();
				$photo->setPath ( $path );
				$photo->setUrl ( $image_url );
				$model_entity->addImage ( $photo );
			}
		}
		foreach ( $floorplan_doc->find ( '.plan_top_inner_container .comm_tab_data' ) as $pq_floorplan_image ) {
			$floorplan_url = $this->root_url . pq ( pq ( $pq_floorplan_image )->find ( 'img' ) )->attr ( 'src' );
			$path = $this->save_image ( $floorplan_url );
			if (! empty ( $path )) {
				$photo = new Photo ();
				$photo->setPath ( $path );
				$photo->setUrl ( $floorplan_url );
				$model_entity->addFloorplan ( $photo );
			}
		}
		$path = $this->save_image ( $model_facade_url );
		if (! empty ( $path )) {
			$photo = new Photo ();
			$photo->setPath ( $path );
			$photo->setUrl ( $model_facade_url );
			$model_entity->addFacade ( $photo );
		}
		$m = $this->add_model ( $model_entity );
		$string_price = pq ( $doc->find ( '.header_right_container .plan_price' ) )->text ();
		$price = str_replace ( ',', '', array_pop ( explode ( '$', $string_price ) ) );
		$home_entity = new Home ();
		$home_entity->setCommunity ( $community_entity );
		$home_entity->setHomeModel ( $m );
		$p = new Price ();
		$p->setPrice ( $price );
		$home_entity->addPrice ( $p );
		$price_per_foot = floatval ( $price ) / $square_feet;
		$home_entity->setPricePerFoot ( $price_per_foot );
		$home_entity->setAddress ( $community_entity->getAddress () );
		$home_entity->setZipcode ( $community_entity->getZipcode () );
		$this->add_home ( $home_entity );
	}
	private $builder_name;
	private $root_url;
}