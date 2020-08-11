<?php

class Solution {

    /**
     * @param Integer $n
     * @return Integer
     */
    function waysToChange($n) {
        $ways = [1, 5, 10, 25];

        $dp[0] = 1;

        for ($i = 1; $i <= $n; $i++) {
            $dp[$i] = 0;

            for ($j = 0; $j < count($ways); $j++) {
                if ($i >= $ways[$j]) {
                    $dp[$i] = $dp[$i - $ways[$j]] + $dp[$i];
                }
            }
        }
        var_dump($dp);
        exit;
    }
}

$solution = new Solution();
var_dump($solution->waysToChange(10));