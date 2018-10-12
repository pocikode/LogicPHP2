<?php
namespace App\Commands;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Output\OutputInterface;

class CreateUserCommand extends Command
{
	public function __construct(bool $requiredPassword  = false)
	{
		$this->requiredPassword = $requiredPassword;

		parent::__construct();
	}

    protected function configure()
    {
        $this->setName('app:create-user')->setDescription('Create a new User.')->setHelp('This command allows you to create a user...');

        $this->addArgument('password', $this->requiredPassword ? InputArgument::OPTIONAL : InputArgument::REQUIRED, 'User password');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $output->writeln([
        	'User Creator',
        	'============',
        	''
        ]);
    }
}