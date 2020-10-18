<?php

class Solution {

    /**
     * @param Integer[][] $A
     * @return Integer
     */
    function minFallingPathSum($A) {
        if (empty($A)) return 0;

        $y = count($A);
        $x = count($A[0]);

        $dp = [];

        for ($i = $y - 1; $i >= 0; $i--) {
            for ($j = 0; $j < $x; $j++) {
                if ($i == $y - 1) {
                    $next = 0;
                } else if ($j == 0) {
                    $next = min($dp[$i + 1][$j], $dp[$i + 1][$j + 1]);
                } else if ($j == $x - 1) {
                    $next = min($dp[$i + 1][$j], $dp[$i + 1][$j - 1]);
                } else {
                    $next = min($dp[$i + 1][$j], $dp[$i + 1][$j - 1], $dp[$i + 1][$j + 1]);
                }
                $dp[$i][$j] = $A[$i][$j] + $next;
            }
        }
        return min($dp[0]);
    }
}

$solution = new Solution();
var_dump($solution->minFallingPathSum([[1, 2, 3], [4, 5, 6], [7, 8, 9]]));