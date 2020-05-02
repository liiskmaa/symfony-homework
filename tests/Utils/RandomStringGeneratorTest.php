<?php
/*
 * Symfony Homework file
 *
 * Jaanek Liiskmaa <liiskmaa@gmail.com>
 */

namespace App\Tests\Utils;

use App\Utils\RandomStringGenerator;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;

class RandomStringGeneratorTest extends KernelTestCase
{
    /**
     * @var object|null
     */
    protected $randomStringGenerator;

    /**
     * Set Up
     * @return void
     */
    protected function setUp(): void
    {
        static::bootKernel();
        $this->randomStringGenerator = static::$kernel->getContainer()->get(RandomStringGenerator::class);
    }

    /**
     * Tear Down
     * @return void
     */
    protected function tearDown(): void
    {
        $this->randomStringGenerator = null;
    }

    /**
     * Generate Random String
     * @return void
     */
    public function testGenerateRandomString(): void
    {
        $stringLength = 15;

        $randomString = $this->randomStringGenerator->generateRandomString($stringLength);

        $this->assertEquals($stringLength, strlen($randomString));
    }
}
