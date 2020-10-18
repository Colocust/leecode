<?php
//打家劫舍变种

class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer
     */
    function deleteAndEarn($nums) {
        $length = max($nums);
        $data = array_fill(1, $length, 0);
        foreach ($nums as $i) {
            $data[$i]++;
        }
        $dp[0] = 0;
        $dp[1] = $data[1];

        for ($i = 2; $i <= $length; $i++) {
            $dp[$i] = max($dp[$i - 1], $dp[$i - 2] + ($data[$i] * $i));
        }
        return $dp[$length];
    }
}

$solution = new Solution();
var_dump($solution->deleteAndEarn([2, 2, 3, 3, 3, 4]));