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
        $dp[$length - 1] = $nums[$length - 1];

        for ($i = $length - 2; $i >= 0; $i--) {
            $dp[$i] = 0;

            for ($j = $i; $j < $length; $j++) {
                $append = 0;
                if ($j + 2 < $length) {
                    $append = $dp[$j + 2];
                }
                $dp[$i] = max($dp[$i], $append + $nums[$j]);
            }
        }
        return $dp[0];
    }
}

$solution = new Solution();
var_dump($solution->massage([1, 2, 3, 1]));