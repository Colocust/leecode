<?php

class Solution {

    /**
     * @param String $s
     * @return Boolean
     */
    function isPalindrome($s) {
        if (strlen($s) < 1) return true;
        $str = "";
        for ($i = 0; $i < strlen($s); $i++) {
            if (($s[$i] >= 'a' && $s[$i] <= 'z') || ($s[$i] >= 'A' && $s[$i] <= 'Z') || ($s[$i] >= '0' && $s[$i] <= '9')) {
                $str .= strtolower($s[$i]);
            }
        }
        $left = 0;
        $right = strlen($str) - 1;
        while ($left < $right) {
            if ($str[$left] !== $str[$right]) {
                return false;
            }
            $left++;
            $right--;
        }
        return true;
    }
}

$str = "0P";
$solution = new Solution();
var_dump($solution->isPalindrome($str));