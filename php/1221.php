<?php

class Solution {

    /**
     * @param String $s
     * @return Integer
     */
    function balancedStringSplit($s) {
        $cnt = 0;
        $L = 0;
        $R = 0;

        for ($i = 0; $i < strlen($s); $i++) {
            if ($s[$i] == 'L') $L++;
            if ($s[$i] == 'R') $R++;
            if ($L == $R) $cnt++;
        }
        return $cnt;
    }

    function balancedStringSplitStack($s) {
        $cnt = 0;
        $stack = [];
        for ($i = 0; $i < strlen($s); $i++) {
            if ($stack) {
                if ($stack[count($stack) - 1] == $s[$i]) {
                    $stack[] = $s[$i];
                } else {
                    array_pop($stack);
                }
            } else {
                $stack[] = $s[$i];
            }

            if (empty($stack)) {
                $cnt++;
            }
        }

        return $cnt;
    }
}

$solution = new Solution();
var_dump($solution->balancedStringSplit('RRRLLRLL'));