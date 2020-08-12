<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $S
     * @return Integer
     */
    function findTargetSumWays($nums, $S) {
        $sum = array_sum($nums);
        if ($sum < $S) return 0;

        //理清思路
        //sum(+) - sum(-) = target 标志为正数的-标志为负数的 = S
        //sum(+) + sum(-) = sum(nums)
        //sum(+) = target + sum(nums) / 2

        $target = ($sum + $S) / 2;

        $dp = array_fill(1, $target, 0);
        $dp[0] = 1;

        for ($i = 0; $i < count($nums); $i++) {
            for ($j = $target; $j >= $nums[$i]; $j--) {
                $dp[$j] += $dp[$j - $nums[$i]];
            }
        }
        return $dp[$target];
    }
}

$solution = new Solution();
var_dump($solution->findTargetSumWays([0, 0], 0));
