<?php

class Solution {

    /**
     * @param Integer[] $A
     * @param Integer[] $B
     * @return Integer
     */
    function findLength($A, $B) {
        $l1 = count($A);
        $l2 = count($B);

        if (!$l1 || !$l2) return 0;

        $max = 0;

        $dp = array_fill(0, $l1 + 1, array_fill(0, $l2 + 1, 0));

        for ($i = 1; $i <= $l1; $i++) {
            for ($j = 1; $j <= $l2; $j++) {
                if ($A[$i - 1] == $B[$j - 1]) {
                    $dp[$i][$j] = $dp[$i - 1][$j - 1] + 1;
                } else {
                    $dp[$i][$j] = 0;
                }
            }
        }
        var_dump($dp);
        exit;


        return $max;
    }
}

$solution = new Solution();
var_dump($solution->findLength([1, 2, 3], [3, 4]));
