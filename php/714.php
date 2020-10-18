<?php

class Solution {

    /**
     * @param Integer[] $prices
     * @param Integer $fee
     * @return Integer
     */
    function maxProfit($prices, $fee) {
        $dp = [];

        $dp[0][0] = 0;
        $dp[0][1] = -$prices[0];

        for ($i = 1; $i < count($prices); $i++) {
            $dp[$i][0] = max($dp[$i - 1][0], $dp[$i - 1][1] + $prices[$i] - $fee);
            $dp[$i][1] = max($dp[$i - 1][1], $dp[$i - 1][0] - $prices[$i]);
        }
        return $dp[count($prices) - 1][0];
    }
}

$solution = new Solution();
var_dump($solution->maxProfit([1, 3, 7, 5, 10, 3], 3));

//输入: prices = [1, 3, 2, 8, 4, 9], fee = 2
//输出: 8