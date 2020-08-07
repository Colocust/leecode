<?php

class Solution {

    /**
     * @param Integer $m
     * @param Integer $n
     * @return Integer
     */
    function uniquePaths($m, $n) {
        $dp = [];

        for ($i = $n - 1; $i >= 0; $i--) {
            for ($j = $m - 1; $j >= 0; $j--) {
                if ($i == $n - 1 && $j == $m - 1) {
                    $dp[$i][$j] = 1;
                    continue;
                }
                if ($i == $n - 1) {
                    $dp[$i][$j] = $dp[$i][$j + 1];
                    continue;
                }
                if ($j == $m - 1) {
                    $dp[$i][$j] = $dp[$i + 1][$j];
                    continue;
                }
                $dp[$i][$j] = $dp[$i + 1][$j] + $dp[$i][$j + 1];
            }
        }
        return $dp[0][0];
    }
}