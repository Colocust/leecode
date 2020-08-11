<?php

class Solution {

    /**
     * @param Integer $n
     * @return Integer
     */
    function waysToChange($n) {
        //状态： i为使用的硬币 j为需要凑的钱
        //dp[i][j] = dp[i-1][j] + dp[i][j - way[i]]
        //当前不使用此硬币 + 当前使用了此硬币（容量变小）
        $ways = [1, 5, 10, 25];

        $dp = [];

        for ($i = 0; $i < count($ways); $i++) {
            for ($j = 0; $j <= $n; $j++) {
                if ($i == 0) {
                    $dp[0][$j] = 1;
                    continue;
                }
                if ($j == 0) {
                    $dp[$i][$j] = 1;
                    continue;
                }
                $dp[$i][$j] = $dp[$i - 1][$j] % 1000000007;
                if ($ways[$i] <= $j) {
                    $dp[$i][$j] = ($dp[$i][$j - $ways[$i]] + $dp[$i][$j]) % 1000000007;
                }
            }
        }
        return $dp[3][$n];
    }
}

$solution = new Solution();
var_dump($solution->waysToChange(10));