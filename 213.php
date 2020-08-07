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

        $dp1[0] = $nums[0];
        $dp1[1] = max($nums[1], $nums[0]);

        for ($i = 2; $i < $length - 1; $i++) {
            $dp1[$i] = max($nums[$i] + $dp1[$i - 2], $dp1[$i - 1]);
        }

        $dp2[1] = $nums[1];
        $dp2[2] = max($nums[1], $nums[2]);
        for ($i = 3; $i < $length; $i++) {
            $dp2[$i] = max($nums[$i] + $dp2[$i - 2], $dp2[$i - 1]);
        }

        return max($dp1[$length - 2], $dp2[$length - 1]);
    }
}

$solution = new Solution();
var_dump($solution->rob([1, 3, 1, 3, 100]));