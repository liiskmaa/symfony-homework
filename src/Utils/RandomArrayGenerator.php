<?php
/*
 * Symfony Homework file
 *
 * Jaanek Liiskmaa <liiskmaa@gmail.com>
 */

namespace App\Utils;

class RandomArrayGenerator
{
    /**
     * @var RandomStringGenerator
     */
    protected $randomStringGenerator;

    /**
     * RandomArrayGenerator constructor.
     * @param RandomStringGenerator $randomStringGenerator
     */
    public function __construct(
        RandomStringGenerator $randomStringGenerator
    ) {
        $this->randomStringGenerator = $randomStringGenerator;
    }

    /**
     * @param int $length
     * @return array
     */
    public function generateRandomArray($length = 5): array
    {
        $currentKey = 0;
        $randomArray = [];
        while ($currentKey < $length) {
            $randomArray[] = $this->randomStringGenerator->generateRandomString();
            $currentKey++;
        }

        return $randomArray;
    }
}
