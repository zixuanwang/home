<?php
use Doctrine\Common\Annotations\AnnotationRegistry;
use Composer\Autoload\ClassLoader;

/**
 *
 * @var ClassLoader $loader
 */
$loader = require __DIR__ . '/../vendor/autoload.php';
$loader->add ( 'phpQuery_', __DIR__ . '/../vendor/phpQuery/lib' );

AnnotationRegistry::registerLoader ( array (
		$loader,
		'loadClass' 
) );

return $loader;
