<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function maxSubArray($nums) {
        $length = count($nums);
        $dp0 = $nums[$length - 1];
        $max = $nums[$length - 1];

        for ($i = $length - 2; $i >= 0; $i--) {
            $dp1 = max($nums[$i], $dp0 + $nums[$i]);
            $dp0 = $dp1;
            $max = max($max, $dp1);
        }
        return $max;
    }
}