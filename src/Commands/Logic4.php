<?php
namespace App\Commands;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputDefinition;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

class Logic4 extends Command
{
    public function configure()
    {
        $this->setName('logic:4')->setDescription('Logic 4 command');

        $this->setDefinition(
        	new InputDefinition([
        		new InputOption('soal', 's', InputOption::VALUE_REQUIRED)
        	])
        );

        $this->addArgument('range', InputArgument::REQUIRED);
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
    	$result = \App\Logic\Logic4::result($input->getOption('soal'), $input->getArgument('range'));

    	$output->writeln($result);
    }
}