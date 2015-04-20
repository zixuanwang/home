<?php

namespace Acme\MyBundle\Lib;

use Acme\MyBundle\Entity\Community;
use Acme\MyBundle\Entity\Home;
use Acme\MyBundle\Entity\HomeModel;
use Acme\MyBundle\Entity\Photo;
use Acme\MyBundle\Entity\Price;
use phpQuery_phpQuery;
use Acme\MyBundle\Entity\School;

class LennarParser extends Parser {
	public function __construct($entity_manager) {
		parent::__construct ( $entity_manager );
		$this->builder_name = 'Lennar';
		$this->root_url = 'http://www.lennar.com';
	}
	
	/**
	 * this function fetches images embedded in the model page
	 * an array containing saved image names is returned.
	 */
	public function parse_image($url) {
		// parse html using phpQuery
		$html = file_get_contents ( $url );
		$php_query = new phpQuery_phpQuery ();
		$doc = $php_query->newDocument ( $html );
		$floorplan_urls = array ();
		$model_urls = array ();
		$facade_urls = array ();
		foreach ( $doc ['#floorplans li > img'] as $element ) {
			$floorplan_urls [] = pq ( $element )->attr ( 'src' );
		}
		foreach ( $doc ['.scrapbook img'] as $element ) {
			$model_urls [] = pq ( $element )->attr ( 'data-src' );
		}
		foreach ( $doc ['.masthead .SlideImage'] as $element ) {
			$query = pq ( $element );
			if (! empty ( $query->attr ( 'data-src' ) )) {
				$facade_urls [] = $query->attr ( 'data-src' );
			} else {
				$facade_urls [] = $query->attr ( 'src' );
			}
		}
		// save images.
		$images = array ();
		$images ['floorplan'] = array ();
		$images ['model'] = array ();
		$images ['facade'] = array ();
		foreach ( $floorplan_urls as $url ) {
			$name = $this->save_image ( $url );
			if (! empty ( $name ))
				$images ['floorplan'] [$url] = $name;
		}
		foreach ( $model_urls as $url ) {
			$name = $this->save_image ( $url );
			if (! empty ( $name )) {
				$images ['model'] [$url] = $name;
			}
		}
		foreach ( $facade_urls as $url ) {
			$name = $this->save_image ( $url );
			if (! empty ( $name )) {
				$images ['facade'] [$url] = $name;
			}
		}
		return $images;
	}
	public function fetch_area($area) {
		// get facet results
		// construct REST request
		$facet_url = $this->root_url . '/Services/REST/Facets.svc/GetFacetResults';
		if ($area == 'seattle') {
			$request_string = '{"searchState":{"ctx":"Market","stcd":"WA","mkid":86,"ddmd":"","loc":[0,0,0,0,0,0,0,0,0,0],"sch":[0,0,0,0,0,0,0,0,0,0,0,0,0],"mnpr":[0,0,0,0,0,0,0],"mxpr":[0,0,0,0,0,0,0],"mnsf":[0,0,0,0,0,0],"mxsf":[0,0,0,0,0,0],"bed":[0,0,0],"bat":[0,0,0,0,0],"gar":[0,0],"str":[0,0,0],"mvdt":"No Preference","type":[0,0,0,0],"amen":[0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0],"rad":0,"lat":0,"long":0,"zip":""},"pageState":{"ct":"C","pn":1,"ps":100,"sb":"communityname","so":"asc"}}';
		}
		if ($area == 'portland') {
			$request_string = '{"searchState":{"ctx":"Market","stcd":"OR","mkid":88,"ddmd":"","loc":[0,0,0,0,0,0,0,0],"sch":[0,0,0,0,0,0],"mnpr":[0,0,0,0,0,0],"mxpr":[0,0,0,0,0,0],"mnsf":[0,0,0,0,0,0,0],"mxsf":[0,0,0,0,0,0,0],"bed":[0,0,0],"bat":[0,0,0],"gar":[0,0],"str":[0,0,0],"mvdt":"No Preference","type":[0,0],"amen":[0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0],"rad":0,"lat":0,"long":0,"zip":""},"pageState":{"ct":"C","pn":1,"ps":100,"sb":"communityname","so":"asc"}}';
		}
		if ($area == 'sf') {
			$request_string = '{"searchState":{"ctx":"Market","stcd":"CA","mkid":67,"ddmd":"","loc":[0,0,0,0,0,0,0,0],"sch":[0,0],"mnpr":[0,0,0,0,0,0,0,0,0],"mxpr":[0,0,0,0,0,0,0,0,0],"mnsf":[0,0,0,0,0,0,0,0],"mxsf":[0,0,0,0,0,0,0,0],"bed":[0,0,0,0,0],"bat":[0,0,0,0,0],"gar":[0,0,0],"str":[0,0],"mvdt":"No Preference","type":[0,0,0,0,0,0],"amen":[0,0,0,0,0,0,0],"rad":0,"lat":0,"long":0,"zip":""},"pageState":{"ct":"C","pn":1,"ps":100,"sb":"communityname","so":"asc"}}';
		}
		if ($area == 'la') {
			$request_string = '{"searchState":{"ctx":"Market","stcd":"CA","mkid":37,"ddmd":"","loc":[0,0,0],"sch":[0],"mnpr":[0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0],"mxpr":[0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0],"mnsf":[0,0,0,0,0,0],"mxsf":[0,0,0,0,0,0],"bed":[0,0,0,0],"bat":[0,0,0,0],"gar":[0,0],"str":[0,0],"mvdt":"No Preference","type":[0,0,0],"amen":[0,0,0,0,0,0,0],"rad":0,"lat":0,"long":0,"zip":""},"pageState":{"ct":"C","pn":1,"ps":100,"sb":"communityname","so":"asc"}}';
		}
		if ($area == 'houston') {
			$request_string = '{"searchState":{"ctx":"Market","stcd":"TX","mkid":28,"ddmd":"","loc":[0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0],"sch":[0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0],"mnpr":[0,0,0,0,0,0,0,0,0,0,0,0],"mxpr":[0,0,0,0,0,0,0,0,0,0,0,0],"mnsf":[0,0,0,0,0,0,0,0,0,0,0],"mxsf":[0,0,0,0,0,0,0,0,0,0,0],"bed":[0,0,0,0,0],"bat":[0,0,0,0,0],"gar":[0,0],"str":[0,0,0,0],"mvdt":"No Preference","type":[0,0,0,0,0],"amen":[0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0],"rad":0,"lat":0,"long":0,"zip":""},"pageState":{"ct":"C","pn":1,"ps":100,"sb":"communityname","so":"asc"}}';
		}
		if ($area == 'miami') {
			$request_string = '{"searchState":{"ctx":"Market","stcd":"FL","mkid":40,"ddmd":"","loc":[0,0,0,0,0],"sch":[0,0,0,0,0,0],"mnpr":[0,0,0,0,0,0,0,0,0,0,0],"mxpr":[0,0,0,0,0,0,0,0,0,0,0],"mnsf":[0,0,0,0,0,0,0],"mxsf":[0,0,0,0,0,0,0],"bed":[0,0,0,0],"bat":[0,0,0,0,0],"gar":[0,0,0],"str":[0,0,0],"mvdt":"No Preference","type":[0,0,0],"amen":[0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0],"rad":0,"lat":0,"long":0,"zip":""},"pageState":{"ct":"C","pn":1,"ps":100,"sb":"communityname","so":"asc"}}';
		}
		if ($area == 'atlanta') {
			$request_string = '{"searchState":{"ctx":"Market","stcd":"GA","mkid":82,"ddmd":"","loc":[0,0,0,0,0,0,0,0,0],"sch":[0,0,0,0],"mnpr":[0,0,0,0,0,0,0,0],"mxpr":[0,0,0,0,0,0,0,0],"mnsf":[0,0,0,0,0,0,0],"mxsf":[0,0,0,0,0,0,0],"bed":[0,0,0,0],"bat":[0,0,0,0,0],"gar":[0,0],"str":[0],"mvdt":"No Preference","type":[0,0],"amen":[0,0,0,0,0,0,0,0,0,0,0,0,0,0],"rad":0,"lat":0,"long":0,"zip":""},"pageState":{"ct":"C","pn":1,"ps":100,"sb":"communityname","so":"asc"}}';
		}
		$facet_result = $this->curl_get_contents ( $facet_url, $request_string );
		$facet_array = json_decode ( $facet_result, true );
		// get community details
		// construct REST request
		$community_url = $this->root_url . '/Services/Rest/SearchMethods.svc/GetCommunityDetails';
		$data_array = array ();
		$data_array ['facetResults'] = array ();
		$community_count = count ( $facet_array ['fr'] );
		$data_array ['pageState'] = array (
				'ct' => 'C',
				'pt' => 'C',
				'sb' => 'communityname',
				'so' => 'asc',
				'pn' => 1,
				'ps' => $community_count,
				'ic' => $community_count,
				'ss' => 0 
		);
		foreach ( $facet_array ['fr'] as $item ) {
			$data_array ['facetResults'] [] = $item;
		}
		$json_string = json_encode ( $data_array );
		$community_result = $this->curl_get_contents ( $community_url, $json_string );
		// delve into each community
		$community_array = json_decode ( $community_result, true );
		foreach ( $community_array as $community ) {
			$community_entity = new Community ();
			$community_entity->setBuilder ( $this->builder_name );
			$community_name = trim ( $community ['mcm'] . ' ' . $community ['cnm'] );
			$community_entity->setName ( $community_name );
			$community_entity->setAddress ( $community ['add'] );
			$community_entity->setCity ( $community ['cty'] );
			$community_entity->setState ( $community ['sco'] );
			$community_entity->setZipcode ( $community ['zip'] );
			$community_entity->setArea ( $area );
			$this->fetch_community_page ( $community_entity, $this->root_url . $community ['vtlURL'] );
			$facade_url = substr ( $community ['img'], 0, strpos ( $community ['img'], 'ashx?' ) + 5 );
			$facade_name = $this->save_image ( $facade_url );
			if (! empty ( $facade_name )) {
				$facade_photo = new Photo ();
				$facade_photo->setPath ( $facade_name );
				$facade_photo->setUrl ( $facade_url );
				$community_entity->addFacade ( $facade_photo );
			}
			$c = $this->add_community ( $community_entity );
			$this->fetch_model ( $community ['cid'], $c );
		}
	}
	public function fetch_community_page($community_entity, $community_page_url) {
		$html = file_get_contents ( $community_page_url );
		$php_query = new phpQuery_phpQuery ();
		$doc = $php_query->newDocument ( $html );
		// fetch schools
		$school_array = array ();
		// only keep last three entries
		foreach ( $doc->find ( '.detail-schools li' ) as $element ) {
			$school_array [] = pq ( $element )->text ();
		}
		$school_array = array_reverse ( $school_array );
		$i = 0;
		foreach ( $school_array as $element ) {
			$school = new School ();
			$school->setName ( $element );
			$school->setState ( $community_entity->getState () );
			$s = $this->add_school ( $school );
			if ($s != null) {
				$community_entity->addSchool ( $s );
			}
			$i ++;
			if ($i > 2) {
				break;
			}
		}
		// fetch community map
		foreach ( $doc->find ( '.detail-info-content a' ) as $element ) {
			if (strtolower ( pq ( $element )->text () ) == 'site plan') {
				$url = $this->root_url . pq ( $element )->attr ( 'href' );
				$url_array = explode ( '&', $url );
				foreach ( $url_array as $item ) {
					if (substr ( $item, 0, 3 ) == 'np=') {
						$url = str_replace ( '%2f', '/', $item );
						$url = $this->root_url . substr($url, 3);
						break;
					}
				}
				$photo = new Photo ();
				$path = $this->save_file ( $url, '.pdf' );
				$photo->setPath ( $path );
				$p = $this->add_photo ( $photo );
				$community_entity->setMap ( $p );
			}
		}
	}
	
	/**
	 * this function parses the page of seattle.
	 * for example, see ajax queries in http://www.lennar.com/New-Homes/Washington/Seattle
	 */
	public function fetch_seattle() {
		$this->fetch_area ( 'seattle' );
	}
	public function fetch_portland() {
		$this->fetch_area ( 'portland' );
	}
	public function fetch_sf() {
		$this->fetch_area ( 'sf' );
	}
	public function fetch_la() {
		$this->fetch_area ( 'la' );
	}
	public function fetch_houston() {
		$this->fetch_area ( 'houston' );
	}
	public function fetch_miami() {
		$this->fetch_area ( 'miami' );
	}
	public function fetch_atlanta() {
		$this->fetch_area ( 'atlanta' );
	}
	
	/**
	 * this function parses the page of community.
	 * all information within the community are fetched.
	 * for example, see ajax queries in http://www.lennar.com/New-Homes/Washington/Seattle/Bothell/Canton-Ridge
	 */
	public function fetch_model($community_id, $community_entity) {
		$home_url = $this->root_url . '/Services/Rest/SearchMethods.svc/GetHomesTabDetails';
		$data_array = array ();
		$data_array ['CommunityID'] = $community_id;
		$data_array ['pageState'] = array (
				'ct' => 'A',
				'sb' => 'price',
				'pn' => 1,
				'ps' => 50,
				'ad' => true,
				'ss' => 0,
				'ic' => 0,
				'so' => 'asc' 
		);
		$data_array ['tabLocation'] = array (
				'mi' => 0,
				'lat' => 0,
				'long' => 0 
		);
		$json_string = json_encode ( $data_array );
		$model_result = $this->curl_get_contents ( $home_url, $json_string );
		$model_array = json_decode ( $model_result, true );
		foreach ( $model_array ['pr'] as $model ) {
			$model_entity = new HomeModel ();
			$model_entity->setBuilder ( $this->builder_name );
			$model_entity->setSquareFeet ( $model ['sgft'] );
			$model_entity->setNumBaths ( $model ['bathrm'] );
			$model_entity->setNumBeds ( $model ['bedrm'] );
			$model_entity->setNumGarages ( $model ['gagebay'] );
			$model_entity->setNumStories ( $model ['story'] );
			$model_entity->setName ( $model ['plmktnm'] );
			$model_entity->setArea ( $community_entity->getArea () );
			// fetch images from the web page
			$page_url = $this->root_url . $model ['vtlURL'];
			$images = $this->parse_image ( $page_url );
			foreach ( $images ['facade'] as $url => $image ) {
				$photo = new Photo ();
				$photo->setPath ( $image );
				$photo->setUrl ( $url );
				$model_entity->addFacade ( $photo );
			}
			foreach ( $images ['floorplan'] as $url => $image ) {
				$photo = new Photo ();
				$photo->setPath ( $image );
				$photo->setUrl ( $url );
				$model_entity->addFloorplan ( $photo );
			}
			foreach ( $images ['model'] as $url => $image ) {
				$photo = new Photo ();
				$photo->setPath ( $image );
				$photo->setUrl ( $url );
				$model_entity->addImage ( $photo );
			}
			$m = parent::add_model ( $model_entity );
			if ($m != null) {
				$this->fetch_home ( $community_id, $model ['pid'], $community_entity, $m );
			}
		}
	}
	
	/**
	 * this function parses the page of home model.
	 * price and available homes are fetched.
	 * for example, see ajax queries in http://www.lennar.com/New-Homes/Washington/Seattle/Bothell/Canton-Ridge/Bainbridge
	 */
	public function fetch_home($community_id, $model_id, $community_entity, $model_entity) {
		$home_url = $this->root_url . '/Services/Rest/SearchMethods.svc/GetPlanInventoryTabDetails';
		$data_array = array ();
		$data_array ['CommunityID'] = $community_id;
		$data_array ['PlanID'] = $model_id;
		$data_array ['pageState'] = array (
				'ct' => 'A',
				'sb' => 'price',
				'pn' => 1,
				'ps' => 50,
				'ad' => true,
				'ss' => 0,
				'ic' => 0,
				'so' => 'asc' 
		);
		$data_array ['tabLocation'] = array (
				'mi' => 0,
				'lat' => 0,
				'long' => 0 
		);
		$json_string = json_encode ( $data_array );
		$home_result = $this->curl_get_contents ( $home_url, $json_string );
		$home_array = json_decode ( $home_result, true );
		foreach ( $home_array ['ir'] as $home ) {
			$home_entity = new Home ();
			$home_entity->setCommunity ( $community_entity );
			$home_entity->setHomeModel ( $model_entity );
			$price = $home ['price'];
			$price = str_replace ( '$', '', $price );
			$price = str_replace ( ',', '', $price );
			$p = new Price ();
			$p->setPrice ( $price );
			$home_entity->addPrice ( $p );
			$price_per_foot = floatval ( $price ) / $home ['sgft'];
			$home_entity->setPricePerFoot ( $price_per_foot );
			$home_entity->setAddress ( $home ['spdAdd'] );
			$home_entity->setZipcode ( $home ['spZip'] );
			parent::add_home ( $home_entity );
		}
	}
	public $builder_name;
	public $root_url;
}