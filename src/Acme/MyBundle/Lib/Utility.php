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
		try {
			$strange_chars = array (
					'&',
					'/',
					'*',
					':',
					'#',
					'@ ',
					'!',
					'.',
					' ' 
			);
			foreach ( $strange_chars as $char ) {
				$address = str_replace ( $char, ' ', $address );
			}
			$address = preg_replace ( '!\s+!', ' ', $address );
			$address = trim ( $address );
			$address = str_replace ( ' ', '%20', $address );
			$city = str_replace ( ' ', '%20', $city );
			$url = 'http://dev.virtualearth.net/REST/v1/Locations/US/' . $state . '/' . $zipcode . '/' . $city . '/' . $address . '?o=json&key=AqpckLVrDZE9ehOKwFREOF16SWFONVDd9KqviWPOeoiE6oSn-Fu6YZZjalMvvWXg';
			$json_array = json_decode ( file_get_contents ( $url ), true );
			if (isset ( $json_array ['resourceSets'] [0] ['resources'] [0] ['point'] ['coordinates'] )) {
				return $json_array ['resourceSets'] [0] ['resources'] [0] ['point'] ['coordinates'];
			}
		} catch ( \Exception $e ) {
			echo "error in fetching latitude and longitude at " . $url . "\r\n";
		}
		return array ();
	}
	/*
	 * square feet to square meters
	 */
	public static function sqft_to_sqmt($sqft) {
		return $sqft * 0.092903;
	}
	public static function sqmt_to_sqft($sqmt) {
		return $sqmt / 0.092903;
	}
	public static function dollor_to_rmb($dollor) {
		return $dollor * 6.3;
	}
	public static function rmb_to_dollor($rmb) {
		return $rmb / 6.3;
	}
}