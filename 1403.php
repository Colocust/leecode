<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer[]
     */
    function minSubsequence($nums) {
        $ret = [];
        rsort($nums);

        $middle = (int)(array_sum($nums) / 2);

        $sum = 0;
        for ($i = 0; $i < count($nums); $i++) {
            $ret[] = $nums[$i];
            $sum += $nums[$i];
            if ($sum > $middle) {
                break;
            }
        }

        return $ret;
    }
}

$solution = new Solution();
var_dump($solution->minSubsequence([4, 4, 7, 6, 7]));
