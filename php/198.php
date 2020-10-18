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
        $dp_0 = $nums[0];
        $dp_1 = max($nums[0], $nums[1]);

        for ($i = 2; $i < $length; $i++) {
            $max = max($dp_0 + $nums[$i], $dp_1);
            $dp_0 = $dp_1;
            $dp_1 = $max;
        }

        return $dp_1;
    }
}

$solution = new Solution();
var_dump($solution->rob([1,2,3,1]));