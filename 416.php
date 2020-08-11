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
        $dp[0] = true;

        for ($i = 1; $i <= $target; $i++) {
            if ($i == $nums[0]) {
                $dp[$i] = true;
            } else {
                $dp[$i] = false;
            }
        }
        for ($i = 1; $i < count($nums); $i++) {
            for ($j = $target; $j >= $nums[$i]; $j--) {
                $dp[$j] = $dp[$j] || $dp[$j - $nums[$i]];
            }
        }
        return $dp[$target];
    }
}

$solution = new Solution();
var_dump($solution->canPartition(([1, 5, 11, 5])));