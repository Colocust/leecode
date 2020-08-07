<?php

class Solution {

    /**
     * @param String[] $s
     * @return NULL
     */
    function reverseString(&$s) {
        $left = 0;
        $right = count($s) - 1;
        while ($left < $right) {
            $temp = $s[$left];
            $s[$left] = $s[$right];
            $s[$right] = $temp;
            $left++;
            $right--;
        }
        return null;
    }
}

$str = ["h", "e", "l", "l", "o"];
$solution = new Solution();
var_dump($solution->reverseString($str));
var_dump($str);