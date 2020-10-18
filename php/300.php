<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function lengthOfLIS($nums) {
        $length = count($nums);
        if ($length == 0) return 0;
        $dp = array_fill(0, $length, 1);
        for ($i = 0; $i < $length; $i++) {
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
var_dump($solution->lengthOfLIS([1]));