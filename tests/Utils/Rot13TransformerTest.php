<?php
/*
 * Symfony Homework file
 *
 * Jaanek Liiskmaa <liiskmaa@gmail.com>
 */

namespace App\Tests\Utils;

use App\Utils\Rot13Transformer;
use PHPUnit\Framework\TestCase;

class Rot13TransformerTest extends TestCase
{
    /**
     * @var Rot13Transformer
     */
    protected $rot13Transformer;

    /**
     * Set up
     * @return void
     */
    protected function setUp(): void
    {
        $this->rot13Transformer = new Rot13Transformer();
    }

    /**
     * Test Transform
     * @return void
     */
    public function testTransform(): void
    {
        $sourceString = 'TestString';
        $targetString = 'GrfgFgevat';

        $rot13String = $this->rot13Transformer->transform($sourceString);

        $this->assertEquals($targetString, $rot13String);
    }
}
