<?php

class Solution {

    /**
     * @param Integer[] $prices
     * @return Integer
     */
    function maxProfit($prices) {
        if (empty($prices)) return 0;
        $dp = [];

        $max = 2;

        for ($i = 0; $i < count($prices); $i++) {
            $dp[$i][0][0] = 0;
            for ($k = $max; $k >= 1; $k--) {
                if ($i == 0) {
                    $dp[$i][$k][0] = 0;
                    $dp[$i][$k][1] = -$prices[$i];
                    continue;
                }
                $dp[$i][$k][0] = max($dp[$i - 1][$k][0], $dp[$i - 1][$k][1] + $prices[$i]);
                $dp[$i][$k][1] = max($dp[$i - 1][$k][1], $dp[$i - 1][$k - 1][0] - $prices[$i]);
            }
        }

        return $dp[count($prices) - 1][$max][0];
    }
}

$solution = new Solution();
var_dump($solution->maxProfit([3, 3, 5, 0, 0, 3, 1, 4]));