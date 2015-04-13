<?php

namespace Acme\MyBundle\Lib;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Acme\MyBundle\Lib\LennarParser;

class LennarConsole extends ContainerAwareCommand {
	protected function configure() {
		$this->setName ( 'demo:greet' )->setDescription ( 'Greet someone' )->addArgument ( 'name', InputArgument::OPTIONAL, 'Who do you want to greet?' )->addOption ( 'yell', null, InputOption::VALUE_NONE, 'If set, the task will yell in uppercase letters' );
	}
	protected function execute(InputInterface $input, OutputInterface $output) {
		$parser = new LennarParser ( $this->getContainer ()->get ( 'doctrine' )->getManager () );
// 		$output->writeln ( 'parsing Seattle' );
// 		$parser->fetch_seattle ();
// 		$output->writeln ( 'parsing LA' );
// 		$parser->fetch_la ();
// 		$output->writeln ( 'parsing Portland' );
// 		$parser->fetch_portland ();
// 		$output->writeln ( 'parsing SF' );
// 		$parser->fetch_sf ();
// 		$output->writeln ( 'parsing Houston' );
// 		$parser->fetch_houston ();
// 		$output->writeln ( 'parsing Miami' );
// 		$parser->fetch_miami ();
		$output->writeln ( 'parsing Atlanta' );
		$parser->fetch_atlanta ();
		
		$output->writeln ( 'done' );
	}
}