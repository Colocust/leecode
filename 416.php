<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @return Boolean
     */
    function canPartition($nums) {
        $sum = array_sum($nums);
        if ($sum % 2 !== 0) {
            return false;
        }

        $target = $sum / 2;

        $dp = array_fill(1, $target, false);
        $dp[0] = true;

        for ($i = 0; $i < count($nums); $i++) {
            for ($j = $target; $j >= $nums[$i]; $j--) {
                $dp[$j] = $dp[$j] || $dp[$j - $nums[$i]];
            }
        }
        var_dump($dp);exit;
        return $dp[$target];
    }
}

$solution = new Solution();
var_dump($solution->canPartition(([1, 5, 11, 5])));