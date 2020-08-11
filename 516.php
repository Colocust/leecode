<?php

class Solution {

    /**
     * @param String $s
     * @return Integer
     */
    function longestPalindromeSubseq($s) {
        $length = strlen($s);
        if (!$length) return 0;
        $dp = array_fill(0, $length, array_fill(0, $length, 0));

        for ($i = 0; $i < $length; $i++) {
            $dp[$i][$i] = 1;
        }

        for ($i = $length - 1; $i >= 0; $i--) {
            for ($j = $i + 1; $j < $length; $j++) {
                if ($s[$i] == $s[$j]) {
                    $dp[$i][$j] = 2 + $dp[$i + 1][$j - 1];
                } else {
                    $dp[$i][$j] = max($dp[$i + 1][$j], $dp[$i][$j - 1]);
                }
            }
        }
        return $dp[0][$length - 1];
    }
}

$solution = new Solution();
var_dump($solution->longestPalindromeSubseq('bbbab'));