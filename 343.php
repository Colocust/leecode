<?php

class Solution {

    /**
     * @param Integer $n
     * @return Integer
     */
    function integerBreak($n) {
        $dp[1] = 1;

        for ($i = 2; $i <= $n; $i++) {
            $dp[$i] = 1;
            for ($j = 1; $j < $i; $j++) {
                $dp[$i] = max($dp[$i], $j * ($dp[$i - $j]), $j * ($i - $j));
            }
        }
        return $dp[$n];
    }
}

$solution = new Solution();
var_dump($solution->integerBreak(10));

//36