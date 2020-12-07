<?php

namespace App\Model;

final class Common
{
    public static function repeat (Array $array, $times = 3)
    {
        return array_merge(...array_fill(0, $times, $array));
    }
}
