<?php

class Solution {

    /**
     * @param Integer $n
     * @return Integer
     */
    function numSquares($n) {
        $sqrt = (int)(sqrt($n));
        $maxNums = [];
        for ($i = 1; $i <= $sqrt; $i++) {
            $maxNums[] = $i * $i;
        }
        $dp = [];
        $dp[0] = 0;

        for ($i = 1; $i <= $n; $i++) {
            $dp[$i] = PHP_INT_MAX;
            for ($j = 0; $j < count($maxNums); $j++) {
                if ($i >= $maxNums[$j]) {
                    $dp[$i] = min($dp[$i], 1 + $dp[$i - $maxNums[$j]]);
                }
            }
        }
        return $dp[$n];
    }
}

$solution = new Solution();
var_dump($solution->numSquares(12));