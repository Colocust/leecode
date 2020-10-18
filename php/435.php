<?php

class Solution {

    /**
     * @param Integer[][] $intervals
     * @return Integer
     */
    function eraseOverlapIntervals($intervals) {
        $length = count($intervals);

        if ($length == 1 || $length == 0) return 0;

        usort($intervals, [$this, 'sortArrayDP']);

        $dp[0] = 1;
        for ($i = 1; $i < $length; $i++) {
            $dp[$i] = 1;

            for ($j = 0; $j < $i; $j++) {
                if ($intervals[$i][0] >= $intervals[$j][1]) {
                    $dp[$i] = max($dp[$i], 1 + $dp[$j]);
                }
            }
        }
        return $length - max($dp);
    }

    function eraseOverlapIntervalsGreed($intervals) {
        $length = count($intervals);

        if ($length == 1 || $length == 0) return 0;

        usort($intervals, [$this, 'sortArrayGreed']);

        $prev = 0;
        $count = 0;

        for ($i = 1; $i < $length; $i++) {
            if ($intervals[$i][0] >= $intervals[$prev][1]) {
                $prev = $i;
            } else {
                $count++;
            }
        }
        return $count;
    }

    function sortArrayGreed($x, $y) {
        return $x[1] > $y[1];
    }

    function sortArrayDP($x, $y) {
        return $x[0] > $y[0];
    }

}

$solution = new Solution();
var_dump($solution->eraseOverlapIntervalsGreed([[0, 2], [1, 3], [2, 4], [3, 5], [4, 6]]));