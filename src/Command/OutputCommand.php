<?php
/*
 * Symfony Homework file
 *
 * Jaanek Liiskmaa <liiskmaa@gmail.com>
 */

namespace App\Command;

use App\Utils\RandomArrayGenerator;
use App\Utils\RandomStringGenerator;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class OutputCommand extends Command
{
    /**
     * Command name
     * @var string
     */
    protected static $defaultName = 'homework:get-output';

    /**
     * @var RandomStringGenerator
     */
    protected $randomStringGenerator;

    /**
     * @var RandomArrayGenerator
     */
    protected $randomArrayGenerator;

    /**
     * OutputCommand constructor.
     * @param RandomStringGenerator $randomStringGenerator
     * @param RandomArrayGenerator $randomArrayGenerator
     * @param string|null $name
     */
    public function __construct(
        RandomStringGenerator $randomStringGenerator,
        RandomArrayGenerator $randomArrayGenerator,
        string $name = null
    ) {
        parent::__construct($name);
        $this->randomStringGenerator = $randomStringGenerator;
        $this->randomArrayGenerator = $randomArrayGenerator;
    }

    /**
     * Configuration
     * @return void
     */
    protected function configure(): void
    {
        $this->setDescription('Generates output to the console')
            ->setHelp('Generates output to the console');
    }

    /**
     * @param InputInterface $input
     * @param OutputInterface $output
     * @return int
     */
    public function execute(InputInterface $input, OutputInterface $output): int
    {
        $randomString = $this->randomStringGenerator->generateRandomString();
        $randomArray = $this->randomArrayGenerator->generateRandomArray(6);

        $output->writeln('<info>Random String</info>');
        $output->writeln($randomString);

        $output->writeln('<info>Random Array</info>');
        $output->writeln($randomArray);

        return 0;
    }
}
