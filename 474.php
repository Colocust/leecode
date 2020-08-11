<?php

class Solution {

    /**
     * @param String[] $strs
     * @param Integer $m
     * @param Integer $n
     * @return Integer
     */
    function findMaxForm($strs, $m, $n) {
        $weight = [];
        foreach ($strs as $key => $str) {
            $weight[$key][0] = 0;
            $weight[$key][1] = 0;
            for ($i = 0; $i < strlen($str); $i++) {
                if ($str[$i] == 0) {
                    $weight[$key][0]++;
                } else {
                    $weight[$key][1]++;
                }
            }
        }
        $dp = [];
        for ($i = 0; $i <= $m; $i++) {
            for ($j = 0; $j <= $n; $j++) {
                if ($i >= $weight[0][0] && $j >= $weight[0][1]) {
                    $dp[$i][$j] = 1;
                } else {
                    $dp[$i][$j] = 0;
                }
            }
        }
        for ($i = 1; $i < count($weight); $i++) {
            for ($j = $m; $j >= $weight[$i][0]; $j--) {
                for ($k = $n; $k >= $weight[$i][1]; $k--) {
                    $dp[$j][$k] = max($dp[$j][$k], 1 + $dp[$j - $weight[$i][0]][$k - $weight[$i][1]]);
                }
            }
        }
        return $dp[$m][$n];
    }
}

$solution = new Solution();
var_dump($solution->findMaxForm(["10", "0", "1"], 1, 1));