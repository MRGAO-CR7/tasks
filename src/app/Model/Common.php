<?php

namespace App\Model;

final class Common
{
    public static function repeat (Array $array, $times = 3)
    {
        return array_merge(...array_fill(0, $times, $array));
    }

    public static function reformat(String $str)
    {
        $result = '';
        foreach(str_split(strtolower($str)) as $char){
            if (in_array($char, ['a', 'e', 'i', 'o', 'u'])) continue;
            $result .= $char;
        }

        return ucfirst($result);
    }
}
