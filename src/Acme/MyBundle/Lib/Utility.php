<?php

namespace Acme\MyBundle\Lib;

class Utility {
	public static function get_stem($path) {
		$ext = Utility::get_extension ( $path );
		return basename ( $path, '.' . $ext );
	}
	public static function get_extension($path) {
		return pathinfo ( $path, PATHINFO_EXTENSION );
	}
	public static function address_to_latlong($address, $city, $state, $zipcode) {
		$url = 'http://dev.virtualearth.net/REST/v1/Locations/US/' . $state . '/' . $zipcode . '/' . $city . '/' . str_replace ( ' ', '%20', $address ) . '?o=json&key=AqpckLVrDZE9ehOKwFREOF16SWFONVDd9KqviWPOeoiE6oSn-Fu6YZZjalMvvWXg';
		$url = str_replace ( ' ', '%20', $url );
		$json_array = json_decode ( file_get_contents ( $url ), true );
		if (isset ( $json_array ['resourceSets'] [0] ['resources'] [0] ['point'] ['coordinates'] )) {
			return $json_array ['resourceSets'] [0] ['resources'] [0] ['point'] ['coordinates'];
		}
		return array ();
	}
}