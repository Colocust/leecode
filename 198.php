<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function rob($nums) {
        if (empty($nums)) {
            return 0;
        }

        $length = count($nums);
        if ($length == 1) {
            return $nums[0];
        }

        $dp[0] = $nums[0];
        $dp[1] = max($nums[0], $nums[1]);

        for ($i = 2; $i < $length; $i++) {
            $dp[$i] = max($dp[$i - 1], $dp[$i - 2] + $nums[$i]);
        }

        return $dp[$length - 1];
    }
}

$solution = new Solution();
var_dump($solution->rob([1, 3, 2, 4, 5, 6]));