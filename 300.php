<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function lengthOfLIS($nums) {
        $length = count($nums);
        if ($length == 0) return 0;
        $dp = [];

        for ($i = 0; $i < $length; $i++) {
            $dp[$i] = 1;

            for ($j = 0; $j < $i; $j++) {
                if ($nums[$i] > $nums[$j]) {
                    $dp[$i] = max($dp[$i], $dp[$j] + 1);
                }
            }
        }
        return max($dp);
    }
}

$solution = new Solution();
var_dump($solution->lengthOfLIS([10, 9, 2, 5, 3, 7, 101, 18]));