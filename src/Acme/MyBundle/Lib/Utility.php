<?php
namespace Acme\MyBundle\Lib;

class Utility{
	public static function get_stem($path){
		$ext = Utility::get_extension($path);
		return basename($path, '.' . $ext);
	}
	public static function get_extension($path){
		return pathinfo($path, PATHINFO_EXTENSION);
	}
	
}