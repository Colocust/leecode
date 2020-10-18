<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function maxSubArray($nums) {
        $dp = [];
        $length = count($nums);

        $dp[$length - 1] = $nums[$length - 1];
        $max = $dp[$length - 1];

        for ($i = $length - 2; $i >= 0; $i--) {
            $append = 0;
            if ($dp[$i + 1] > 0) {
                $append = $dp[$i + 1];
            }
            $dp[$i] = $nums[$i] + $append;
            $max = max($max, $dp[$i]);
        }
        return $max;
    }
}

$solution = new Solution();
var_dump($solution->maxSubArray([-2, 1, -3, 4, -1, 2, 1, -5, 4]));