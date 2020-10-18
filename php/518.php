<?php

class Solution {

    /**
     * @param Integer $amount
     * @param Integer[] $coins
     * @return Integer
     */
    function change($amount, $coins) {
        $dp = array_fill(1, $amount, 0);
        $dp[0] = 1;

        for ($i = 0; $i < count($coins); $i++) {
            for ($j = $coins[$i]; $j <= $amount; $j++) {
                $dp[$j] += $dp[$j - $coins[$i]];
            }
        }
        return $dp[$amount];
    }
}

//5
//1，2，5

$solution = new Solution();
var_dump($solution->change(5, [2, 1, 5]));