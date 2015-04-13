<?php
require __DIR__ . '/../../../../vendor/autoload.php';
require __DIR__ . '/../../../../app/AppKernel.php';
require __DIR__ . '/../../../../vendor/phpQuery/lib/phpQuery/phpQuery.php';

use Acme\MyBundle\Lib\LennarConsole;
use Doctrine\Common\Annotations\AnnotationRegistry;
use Symfony\Bundle\FrameworkBundle\Console\Application;
use Symfony\Component\Console\Input\ArgvInput;
AnnotationRegistry::registerFile ( __DIR__ . '/../../../../vendor/doctrine/orm/lib/Doctrine/ORM/Mapping/Driver/DoctrineAnnotations.php' );
$input = new ArgvInput ();
$env = $input->getParameterOption ( array (
		'--env',
		'-e' 
), getenv ( 'SYMFONY_ENV' ) ?  : 'dev' );
$debug = getenv ( 'SYMFONY_DEBUG' ) !== '0' && ! $input->hasParameterOption ( array (
		'--no-debug',
		'' 
) ) && $env !== 'prod';
$kernel = new AppKernel ( $env, $debug );
$application = new Application ( $kernel );
$application->add ( new LennarConsole () );
$application->run ();