<?php
namespace App\Commands;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class SayHelloWorld extends Command
{
    public function configure()
    {
        $this->setName('say:hello')->setDescription('Say Hello');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
    	$output->writeln('Hello World');
    }
}
