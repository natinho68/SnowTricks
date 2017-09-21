<?php

namespace AppBundle\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\ArrayInput;

class LoadFixtures extends Command
{
    protected function configure()
    {
        $this
            // the name of the command (the part after "bin/console")
            ->setName('app:load-datas')

            // the short description shown while running "php bin/console list"
            ->setDescription('Load datas fixtures.')

            // the full command description shown when running the command with
            // the "--help" option
            ->setHelp('This command allows you to load all fixtures (users, images, tricks, comments) in the db...')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {

        $command1 = $this->getApplication()->find('doctrine:schema:update');
        $arguments1 = array(
            'command' => 'doctrine:schema:update',
            '-f' => true
        );

        $command2 = $this->getApplication()->find('doctrine:fixtures:load');
        $arguments2 = array(
            'command' => 'doctrine:load:fixtures'
        );

        $commandInput = new ArrayInput($arguments1);
        $returnCode = $command1->run($commandInput, $output);
        $commandInput = new ArrayInput($arguments2);
        $returnCode = $command2->run($commandInput, $output);
    }
}