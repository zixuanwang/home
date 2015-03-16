#!/usr/bin/php
<?php
$html = file_get_contents ( 'http://www.lennar.com/New-Homes/Washington/Seattle/Bothell/The-Reserve-at-Canyon-Park/Hickory' );
$dom = new DOMDocument ();
$dom->validateOnParse = true;
$dom->load ( $html );
$dom->preserveWhiteSpace = false;
// $belement = $dom->getElementById("floorplans");
// echo $belement->nodeValue;
$x = new DOMXPath ( $dom );
$el = $x->query ( "//*[@id='floorplans']" );
var_dump ( $el );
?>