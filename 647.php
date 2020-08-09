<?php

class Solution {

    /**
     * @param String $s
     * @return Integer
     */
    function countSubstrings($s) {
        $length = strlen($s);
        $dp = [];
        $result = 0;
        for ($i = 0; $i < $length; $i++) {
            $result++;
            $dp[$i][$i] = true;
        }

        for ($i = 1; $i < $length; $i++) {
            for ($j = 0; $j < $i; $j++) {
                if ($s[$i] == $s[$j]) {
                    if ($j + 1 == $i) {
                        $dp[$i][$j] = true;
                    } else {
                        $dp[$i][$j] = $dp[$i - 1][$j + 1];
                    }
                } else {
                    $dp[$i][$j] = false;
                }
                $result = $dp[$i][$j] ? $result + 1 : $result;
            }
        }
        return $result;
    }
}

$solution = new Solution();

var_dump($solution->countSubstrings('aaa'));