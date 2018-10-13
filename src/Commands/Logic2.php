<?php
namespace App\Commands;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputDefinition;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

class Logic2 extends Command
{
    public function configure()
    {
        $this->setName('logic:2')->setDescription('Logic 1 command');

        $this->setDefinition(
        	new InputDefinition([
        		new InputOption('soal', 's', InputOption::VALUE_REQUIRED)
        	])
        );

        $this->addArgument('range', InputArgument::REQUIRED);
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
    	// $text = 'Logic 1 '.$input->getOption('soal').' range '.$input->getArgument('range');
    	// $output->writeln($text);

    	$result = \App\Logic\Logic2::result($input->getOption('soal'), $input->getArgument('range'));

    	$output->writeln($result);
    }
}