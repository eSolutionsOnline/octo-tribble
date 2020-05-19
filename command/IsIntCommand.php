<?php


namespace Command;

use Example\Example;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class IsIntCommand extends Command
{
    public function configure()
    {
        $this->setName('isint')
            ->setDescription('Checks a number is an int')
            ->addArgument('int', InputArgument::OPTIONAL, 'An int.', 1);
    }

    public function execute(InputInterface $input, OutputInterface $output)
    {

        $example = new Example;
        $int = $input->getArgument('int');

            if($example->isInt($int)){
                $message = sprintf("%s, is an int", $input->getArgument('int'));
                $output->writeln("<info>{$message}</info>");
            }else{
                $message = sprintf("%s, is NOT an int", $input->getArgument('int'));
                $output->writeln("<error>{$message}</error>");
            }



    }
}