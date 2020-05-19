<?php


namespace Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class ExampleCommand extends Command
{
    public function configure()
    {
        $this->setName('example')
            ->setDescription('An example command which will greet a given name')
            ->addArgument('name', InputArgument::OPTIONAL, 'A Name.', 'Joe Bloggs')
            ->addOption('greeting', null, InputArgument::OPTIONAL, 'Override the default greeting.', 'Hello');
    }

    public function execute(InputInterface $input, OutputInterface $output)
    {
        $message = sprintf("%s, %s", $input->getOption('greeting'), $input->getArgument('name'));

        $output->writeln("<info>{$message}</info>");

        $output->writeln('none');
        $output->writeln('<info>info</info>');
        $output->writeln('<comment>comment</comment>');
        $output->writeln('<question>question</question>');
        $output->writeln('<error>error</error>');

    }
}