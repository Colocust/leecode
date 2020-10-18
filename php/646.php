<?php

class Solution {

    /**
     * @param Integer[][] $pairs
     * @return Integer
     */
    function findLongestChain($pairs) {
        usort($pairs, [$this, 'usortDP']);
        $dp = [];
        $dp[0] = 1;

        for ($i = 1; $i < count($pairs); $i++) {
            $dp[$i] = 1;
            for ($j = 0; $j < $i; $j++) {
                if ($pairs[$j][1] < $pairs[$i][0]) {
                    $dp[$i] = max($dp[$i], $dp[$j] + 1);
                }
            }
        }
        return max($dp);
    }

    function usortDP($x, $y) {
        return $x[0] > $y[0];
    }

    function usortGreedy($x, $y) {
        return $x[1] > $y[1];
    }

    function greedy($pairs) {
        usort($pairs, [$this, 'usortGreedy']);
        $ans = 1;
        $index = 0;
        for ($i = 1; $i < count($pairs); $i++) {
            if ($pairs[$i][0] > $pairs[$index][1]) {
                $index = $i;
                $ans++;
            }
        }
        return $ans;
    }
}

$solution = new Solution();
var_dump($solution->greedy([[-10, -8], [8, 9], [-5, 0], [6, 10], [-6, -4], [1, 7], [9, 10], [-4, 7]]));