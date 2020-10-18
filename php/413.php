<?php

class Solution {

    /**
     * @param Integer[] $A
     * @return Integer
     */
    function numberOfArithmeticSlices($A) {
        $dp[1] = 0;

        for ($i = 2; $i < count($A); $i++) {
            if ($A[$i] - $A[$i - 1] == $A[$i - 1] - $A[$i - 2]) {
                $dp[$i] = 1 + $dp[$i - 1];
            } else {
                $dp[$i] = 0;
            }
        }
        return array_sum($dp);
    }
}

$solution = new Solution();
var_dump($solution->numberOfArithmeticSlices([1, 3, 5, 7, 9]));