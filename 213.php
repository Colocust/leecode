<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function rob($nums) {
        $length = count($nums);
        if ($length == 0) return 0;
        if ($length == 1) return $nums[0];

        $dp0_0 = $nums[0];
        $dp0_1 = max($nums[1], $nums[0]);

        for ($i = 2; $i < $length - 1; $i++) {
            $max = max($dp0_0 + $nums[$i], $dp0_1);
            $dp0_0 = $dp0_1;
            $dp0_1 = $max;
        }

        if ($length == 2) {
            return $dp0_1;
        }

        $dp1_0 = $nums[1];
        $dp1_1 = max($nums[1], $nums[2]);

        for ($i = 3; $i < $length; $i++) {
            $max = max($dp1_0 + $nums[$i], $dp1_1);
            $dp1_0 = $dp1_1;
            $dp1_1 = $max;
        }

        return max($dp1_1, $dp0_1);
    }
}

$solution = new Solution();
var_dump($solution->rob([1, 3, 1, 3, 100]));