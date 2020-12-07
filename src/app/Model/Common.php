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

    public static function next_binary_number(Array $array)
    {
        $len = count($array);
        for ($i = $len -1; $i >= 0; $i--) {
            $array[$i] += 1;
            if ($array[$i] == 2) {
                $array[$i] = 0;
            } else {
                break;
            }
        }

        if ($array[0] === 0) {
            return array_merge([1], $array);
        }
        return $array;
    }
}
