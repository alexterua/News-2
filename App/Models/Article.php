<?php

namespace App\Models;

class Article extends Model
{
    public const TABLE = 'news';

    public $title;
    public $content;

    public static function showLastThree()
    {
        $arrayOfObjects = static::findAll();
        $arrayOfArrays = [];
        for ($i = count($arrayOfObjects) - 1, $j = 0; $i >= 0; $i--, $j++) {
            if ($j == 3) {
                continue;
            }
            $arrayOfArrays[] = (array)$arrayOfObjects[$i];
        }

        return $arrayOfArrays;
    }
}