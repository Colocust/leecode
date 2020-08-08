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

        for ($i = $l1 - 1; $i >= 0; $i--) {
            for ($j = $l2 - 1; $j >= 0; $j--) {
                $dp[$i][$j] = $A[$i] == $B[$j] ? 1 + $dp[$i + 1][$j + 1] : 0;
                $max = max($dp[$i][$j], $max);
            }
        }

        return $max;
    }
}

$solution = new Solution();
var_dump($solution->findLength([1, 2, 3, 2, 1], [3, 2, 1, 4, 7]));
