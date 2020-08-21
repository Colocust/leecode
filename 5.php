<?php

class Solution {

    /**
     * @param String $s
     * @return String
     */
    function longestPalindrome($s) {
        $dp = [];

        $length = strlen($s);
        $strLen = 1;
        $start = $length - 1;

        for ($i = $length - 1; $i >= 0; $i--) {
            $dp[$i][$i] = true;
            for ($j = $i + 1; $j < $length ; $j++) {
                if ($s[$i] == $s[$j]) {
                    if ($j - $i < 3) {
                        $dp[$i][$j] = true;
                    } else {
                        $dp[$i][$j] = $dp[$i + 1][$j - 1];
                    }
                } else {
                    $dp[$i][$j] = false;
                }

                if ($dp[$i][$j] && $j - $i + 1 > $strLen) {
                    $start = $i;
                    $strLen = $j - $i + 1;
                }
            }
        }

        return substr($s, $start, $strLen);
    }
}

$solution = new Solution();
var_dump($solution->longestPalindrome('bb'));