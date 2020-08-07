<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function massage($nums) {
        if (empty($nums)) return 0;
        $length = count($nums);
        if ($length == 1) return $nums[0];

        $dp = [];
        $dp[0] = $nums[0];
        $dp[1] = max($nums[0], $nums[1]);

        for ($i = 2; $i < count($nums); $i++) {
            $dp[$i] = max($dp[$i - 2] + $nums[$i], $dp[$i - 1]);
        }

        return $dp[$length - 1];
    }
}

$solution = new Solution();
var_dump($solution->massage([1, 2, 3, 1]));