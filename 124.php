<?php

class Solution {

    /**
     * @param Integer $k
     * @param Integer[] $prices
     * @return Integer
     */
    function maxProfit($k, $prices) {
        if (empty($prices)) return 0;
        $dp = [];
        for ($i = 0; $i < count($prices); $i++) {
            $dp[$i][0][0] = 0;
            for ($j = $k; $j >= 1; $j--) {
                if ($i == 0) {
                    $dp[$i][$j][0] = 0;
                    $dp[$i][$j][1] = -$prices[$i];
                    continue;
                }
                $dp[$i][$j][0] = max($dp[$i - 1][$j][0], $dp[$i - 1][$j][1] + $prices[$i]);
                $dp[$i][$j][1] = max($dp[$i - 1][$j][1], $dp[$i - 1][$j - 1][0] - $prices[$i]);
            }
        }
        return $dp[count($prices) - 1][$k][0];
    }
}

$solution = new Solution();
var_dump($solution->maxProfit(2, [2, 4, 1]));