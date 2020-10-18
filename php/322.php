<?php

class Solution {

    /**
     * @param Integer[] $coins
     * @param Integer $amount
     * @return Integer
     */
    function coinChange($coins, $amount) {
        if ($amount == 0) return 0;

        $dp = array_fill(1, $amount, PHP_INT_MAX);
        $dp[0] = 0;

        for ($i = 0; $i < count($coins); $i++) {
            for ($j = $coins[$i]; $j <= $amount; $j++) {
                $dp[$j] = min($dp[$j], $dp[$j - $coins[$i]] + 1);
            }
        }
        return $dp[$amount] == PHP_INT_MAX ? -1 : $dp[$amount];
    }
}

$solution = new Solution();
var_dump($solution->coinChange([1, 2, 5], 11));