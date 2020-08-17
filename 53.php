<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function maxSubArray($nums) {
        $length = count($nums);
        $dp[$length - 1] = $nums[$length - 1];
        $max = $nums[$length - 1];

        for ($i = $length - 2; $i >= 0; $i--) {
            $dp[$i] = max($nums[$i], $dp[$i + 1] + $nums[$i]);
            $max = max($max, $dp[$i]);
        }
        return $max;
    }
}