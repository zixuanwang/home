<?php

namespace Acme\MyBundle\Lib;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Acme\MyBundle\Lib\DrHortonParser;
use Acme\MyBundle\Lib\LennarParser;
use Acme\MyBundle\Lib\PulteParser;

class LennarConsole extends ContainerAwareCommand {
	protected function configure() {
		$this->setName ( 'parse' )->setDescription ( 'Fetch area' )->addArgument ( 'area', InputArgument::OPTIONAL, 'Where do you want to fetch' );
	}
	protected function execute(InputInterface $input, OutputInterface $output) {
		$area = $input->getArgument ( 'area' );
		$parser = new LennarParser ( $this->getContainer ()->get ( 'doctrine' )->getManager () );
		$output->writeln ( 'Parsing Lennar ' . $area );
		$parser->fetch_area ( $area );
		$parser = new PulteParser ( $this->getContainer ()->get ( 'doctrine' )->getManager () );
		$output->writeln ( 'Parsing Pulte Homes ' . $area );
		$parser->fetch_area ( $area );
		$output->writeln ( 'done' );
	}
}