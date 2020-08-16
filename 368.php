<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer[]
     */
    function largestDivisibleSubset($nums) {
        //状态 dp[$i] = max($dp[$i],1+$dp[$i-1])
        sort($nums);
        $dp[0] = 1;
        $ret[0] = [$nums[0]];
        $index = 0;

        for ($i = 1; $i < count($nums); $i++) {
            $dp[$i] = 1;
            $ret[$i] = [$nums[$i]];

            for ($j = 0; $j < $i; $j++) {
                if ($nums[$i] % $nums[$j] == 0) {
                    if ($dp[$j] + 1 > $dp[$i]) {
                        $dp[$i] = $dp[$j] + 1;
                        $ret[$i] = array_merge($ret[$j], [$nums[$i]]);
                    }
                }
            }

            if ($dp[$i] > $dp[$index]) {
                $index = $i;
            }
        }
        return $ret[$index];
    }
}

$solution = new Solution();
var_dump($solution->largestDivisibleSubset([4, 8, 10, 240]));