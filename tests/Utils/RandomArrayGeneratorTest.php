<?php
/*
 * Symfony Homework file
 *
 * Jaanek Liiskmaa <liiskmaa@gmail.com>
 */

namespace App\Tests\Utils;

use App\Utils\RandomArrayGenerator;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;

class RandomArrayGeneratorTest extends KernelTestCase
{
    /**
     * @var object|null
     */
    protected $randomArrayGenerator;

    /**
     * Set Up
     * @return void
     */
    protected function setUp(): void
    {
        static::bootKernel();
        $this->randomArrayGenerator = static::$kernel->getContainer()->get(RandomArrayGenerator::class);
    }

    /**
     * Tear Down
     * @return void
     */
    protected function tearDown(): void
    {
        $this->randomArrayGenerator = null;
    }

    /**
     * Generate Random Array
     * @return void
     */
    public function testGenerateRandomArray(): void
    {
        $arrayLength = 10;

        $randomArray = $this->randomArrayGenerator->generateRandomArray($arrayLength);

        $this->assertEquals($arrayLength, count($randomArray));
    }
}
