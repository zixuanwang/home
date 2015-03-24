<?php

namespace Acme\MyBundle\Lib;

use Acme\MyBundle\Entity\Album;
use Acme\MyBundle\Entity\Community;
use Acme\MyBundle\Entity\Home;
use Acme\MyBundle\Entity\HomeModel;
use Acme\MyBundle\Entity\Photo;
use Acme\MyBundle\Entity\Acme\MyBundle\Entity;
use Acme\MyBundle\Lib\phpQuery\phpQuery;
use Doctrine\ORM\EntityManager;
use phpQuery_phpQuery;
use Assetic\Exception\Exception;

class LennarParser {

	
	/**
	 * this function parses the page of seattle.
	 * for example, see ajax queries in http://www.lennar.com/New-Homes/Washington/Seattle
	 */
	public function fetch_seattle() {
	}
	
	public function fetch_community(){
		
	}
	
	public function parse_image($url) {
		// parse html using phpQuery
		$html = file_get_contents ( $url );
		$php_query = new phpQuery_phpQuery ();
		$doc = $php_query->newDocument ( $html );
		// $doc = phpQuery::newDocument ( $html );
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
				$images ['floorplan'] [] = $name;
		}
		foreach ( $model_urls as $url ) {
			$name = $this->save_image ( $url );
			if (! empty ( $name )) {
				$images ['model'] [] = $name;
			}
		}
		foreach ( $facade_urls as $url ) {
			$name = $this->save_image ( $url );
			if (! empty ( $name )) {
				$images ['facade'] [] = $name;
			}
		}
		return $images;
	}
}