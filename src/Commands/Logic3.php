<?php
namespace App\Commands;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputDefinition;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

class Logic3 extends Command
{
    private $range = true;

    public function configure()
    {
        $this->setName('logic:3')->setDescription('Logic 3 command');

        $this->setDefinition(
        	new InputDefinition([
        		new InputOption('soal', 's', InputOption::VALUE_REQUIRED)
        	])
        );

        $this->addArgument('range', InputArgument::OPTIONAL);
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        if ($input->getOption('soal') == 1 || $input->getOption('soal') == 2) {
            if (is_null($input->getArgument('range'))) {
                $result = "MASUKAN RANGE ! \n";
            } else {
                $result = \App\Logic\Logic3::result($input->getOption('soal'), $input->getArgument('range'), $array2D=false);
            }
        } elseif ($input->getOption('soal') == 3 || $input->getOption('soal') == 5) {
            $this->range = false;

            echo 'Masukan bilangan pertama : ';
            $bil1 = (int)trim(fgets(STDIN));

            echo 'Masukan bilangan kedua : ';
            $bil2 = (int)trim(fgets(STDIN));
            
            $result =  ($input->getOption('soal') == 3) ? \App\Logic\Logic3::soal3($bil1, $bil2) : \App\Logic\Logic3::soal5($bil1, $bil2);
        } elseif ($input->getOption('soal') == 4) {
            echo 'Masukan Angka : ';
            $bil = (int)trim(fgets(STDIN));

            $result = \App\Logic\Logic3::soal4($bil);
        } else {
            if (is_null($input->getArgument('range'))) {
                $result = "MASUKAN RANGE ! \n";
            } else {
                $result = \App\Logic\Logic3::result($input->getOption('soal'), $input->getArgument('range'));
            }
        }

    	$output->writeln($result);
    }
}