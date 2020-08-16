<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function maxProduct($nums) {
        $max[0] = $nums[0];
        $min[0] = $nums[0];

        for ($i = 1; $i < count($nums); $i++) {
            $max[$i] = max($nums[$i], $nums[$i] * $max[$i - 1], $nums[$i] * $min[$i - 1]);
            $min[$i] = min($nums[$i], $nums[$i] * $max[$i - 1], $nums[$i] * $min[$i - 1]);
        }
        return max($max);
    }
}

$solution = new Solution();
var_dump($solution->maxProduct([-2, 0, -1]));