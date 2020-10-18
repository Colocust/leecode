<?php

class Solution {

    /**
     * @param String $text1
     * @param String $text2
     * @return Integer
     */
    function longestCommonSubsequence($text1, $text2) {
        $l1 = strlen($text1);
        $l2 = strlen($text2);
        if (!$l1 || !$l2) {
            return 0;
        }

        $dp = array_fill(-1, $l1 + 1, array_fill(-1, $l2 + 1, 0));

        for ($i = 0; $i < $l1; $i++) {
            for ($j = 0; $j < $l2; $j++) {
                if ($text1[$i] == $text2[$j]) {
                    $dp[$i][$j] = 1 + $dp[$i - 1][$j - 1];
                } else {
                    $dp[$i][$j] = max($dp[$i - 1][$j], $dp[$i][$j - 1]);
                }
            }
        }
        return $dp[$l1 - 1][$l2 - 1];
    }
}

$solution = new Solution();
var_dump($solution->longestCommonSubsequence('abc', 'def'));