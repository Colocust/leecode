<?php

class Solution {

    /**
     * @param Integer $n
     * @return Integer
     */
    function waysToChange($n) {
        $ways = [1, 5, 10, 25];

        $dp = array_fill(1, $n, 0);
        $dp[0] = 1;

        for ($i = 0; $i < count($ways); $i++) {
            for ($j = $ways[$i]; $j <= $n; $j++) {
                $dp[$j] = ($dp[$j] + $dp[$j - $ways[$i]]) % 1000000007;
            }
        }
        return $dp[$n];
    }
}

$solution = new Solution();
var_dump($solution->waysToChange(900750));