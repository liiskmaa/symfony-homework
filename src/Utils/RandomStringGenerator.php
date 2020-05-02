<?php
/*
 * Symfony Homework file
 *
 * Jaanek Liiskmaa <liiskmaa@gmail.com>
 */

namespace App\Utils;

class RandomStringGenerator
{
    const CHARACTERS = '0123456789abcdefghijklmnopqrstuvwxyz';

    /**
     * @var Rot13Transformer
     */
    protected $rot13Transformer;

    /**
     * RandomStringGenerator constructor.
     * @param Rot13Transformer $rot13Transformer
     */
    public function __construct(
        Rot13Transformer $rot13Transformer
    ) {
        $this->rot13Transformer = $rot13Transformer;
    }

    /**
     * @param int $length
     * @return string
     */
    public function generateRandomString($length = 10): string
    {
        $charactersLength = strlen(self::CHARACTERS);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= self::CHARACTERS[rand(0, $charactersLength - 1)];
        }
        return $this->rot13Transformer->transform($randomString);
    }
}
