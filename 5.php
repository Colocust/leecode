<?php

class Solution {

    /**
     * @param String $s
     * @return String
     */
    function longestPalindrome($s) {
        $dp = [];

        $length = strlen($s);

        $start = $length - 1;
        $maxLength = 1;
        for ($i = $length - 1; $i >= 0; $i--) {
            $dp[$i][$i] = true;
            for ($j = $i + 1; $j < $length; $j++) {
                if ($s[$i] == $s[$j]) {
                    if ($j - $i < 3) {
                        $dp[$i][$j] = true;
                    } else {
                        $dp[$i][$j] = $dp[$i + 1][$j - 1];
                    }
                } else {
                    $dp[$i][$j] = false;
                }
                if ($dp[$i][$j] && $j - $i + 1 > $maxLength) {
                    $start = $i;
                    $maxLength = $j - $i + 1;
                }
            }
        }
        return substr($s, $start, $maxLength);
    }
}

$solution = new Solution();
var_dump($solution->longestPalindrome('babad'));