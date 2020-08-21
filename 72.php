<?php

class Solution {

    /**
     * @param String $word1
     * @param String $word2
     * @return Integer
     */
    function minDistance($word1, $word2) {
        $dp = [];

        for ($i = 0; $i <= strlen($word1); $i++) {
            $dp[$i][0] = $i;
        }
        for ($i = 0; $i <= strlen($word2); $i++) {
            $dp[0][$i] = $i;
        }

        for ($i = 1; $i <= strlen($word1); $i++) {
            for ($j = 1; $j <= strlen($word2); $j++) {
                if ($word1[$i - 1] == $word2[$j - 1]) {
                    $dp[$i][$j] = $dp[$i - 1][$j - 1];
                } else {
                    $dp[$i][$j] = min($dp[$i - 1][$j - 1] + 1, $dp[$i - 1][$j] + 1, $dp[$i][$j - 1] + 1);
                }
            }
        }
        return $dp[strlen($word1)][strlen($word2)];
    }
}

$solution = new Solution();
var_dump($solution->minDistance('horse', 'ros'));