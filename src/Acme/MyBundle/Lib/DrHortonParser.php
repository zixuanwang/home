<?php

namespace Acme\MyBundle\Lib;

use Acme\MyBundle\Entity\Album;
use Acme\MyBundle\Entity\Community;
use Acme\MyBundle\Entity\Home;
use Acme\MyBundle\Entity\HomeModel;
use Acme\MyBundle\Entity\Photo;
use Doctrine\ORM\EntityManager;
use phpQuery_phpQuery;
use Assetic\Exception\Exception;

class DrHortonParser extends Parser {
	public function __construct($entity_manager) {
		parent::__construct ( $entity_manager );
		$this->builder_name = 'DrHorton';
		$this->root_url = 'http://www.drhorton.com/';
	}
	public function fetch_area($area) {
		$url = 'http://www.drhorton.com/Washington/King-County.aspx';
		$html = file_get_contents ( $url );
		$php_query = new phpQuery_phpQuery ();
		$doc = $php_query->newDocument ( $html );
		foreach ( $doc ['.brandedcityListing'] as $element ) {
			$head = pq ( $element )->find ( 'h3' );
			$status = pq ( $element )->find ( '.communitystatustext' );
			if (stripos ( strtolower ( pq ( $status )->text () ), 'now selling' ) !== false) {
				echo pq ( $head )->text () . "\r\n";
			}
		}
	}
	/**
	 * this function parses the page of community.
	 * all information within the community are fetched.
	 * for example, see ajax queries in http://www.drhorton.com/Washington/King-County/Kenmore/Dahlia-Court.aspx
	 */
	public function fetch_model() {
		$home_url = $this->root_url . '/Sites/Com/Community/PlanList.asmx/GetFloorPlans?&st=';
		$json_string = "{'communityPageId': '{7D7071ED-2147-49E4-B3B5-EAFAAD49A0B2}','sortType': '','cacheKey': 'hfp_9112ae8e-615d-4850-92cc-315c3e07cb47','pageNumber': '1','facets': '&st=' }";
		$model_result = $this->curl_get_contents ( $home_url, $json_string );
		$model_array = json_decode ( $model_result, true );
		var_dump ( $model_array );
	}
	private $builder_name;
	private $root_url;
}