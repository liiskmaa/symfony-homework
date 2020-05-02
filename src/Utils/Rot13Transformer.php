<?php
/*
 * Symfony Homework file
 *
 * Jaanek Liiskmaa <liiskmaa@gmail.com>
 */

namespace App\Utils;

class Rot13Transformer
{
    /**
     * @param $value
     * @return string
     */
    public function transform($value): string
    {
        return str_rot13($value);
    }
}
