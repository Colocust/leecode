<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $k
     * @return Boolean
     */
    function checkSubarraySum($nums, $k) {
        //对$k求余数，如果2次取得余数相同，则两次之间必有数相加等于$k
        $count = count($nums);
        $record = [];
        $sum = 0;
        for ($i = 0; $i < $count; $i++) {
            $sum += $nums[$i];
            if ($k !== 0) {
                $sum = $sum % $k;
            }
            if (isset($record[$sum])) {
                if ($i - $record[$sum] > 1) {
                    return true;
                }
            } else {
                $record[$sum] = $i;
            }
        }
        return false;
    }
}

$solution = new Solution();
var_dump($solution->checkSubarraySum([0, 1, 0], 0));