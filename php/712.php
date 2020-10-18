<?php

class Solution {

    /**
     * @param String $s1
     * @param String $s2
     * @return Integer
     */
    function minimumDeleteSum($s1, $s2) {
        $l1 = strlen($s1);
        $l2 = strlen($s2);
        if ($l1 == 0 && $l2 == 0) {
            return 0;
        }

        $dp[$l1][$l2] = 0;

        for ($i = $l1 - 1; $i >= 0; $i--) {
            $dp[$i][$l2] = $dp[$i + 1][$l2] + ord($s1[$i]);
        }

        for ($i = $l2 - 1; $i >= 0; $i--) {
            $dp[$l1][$i] = $dp[$l1][$i + 1] + ord($s2[$i]);
        }

        for ($i = $l1 - 1; $i >= 0; $i--) {
            for ($j = $l2 - 1; $j >= 0; $j--) {
                if ($s1[$i] == $s2[$j]) {
                    $dp[$i][$j] = $dp[$i + 1][$j + 1];
                } else {
                    $dp[$i][$j] = min($dp[$i + 1][$j] + ord($s1[$i]), $dp[$i][$j + 1] + ord($s2[$j]));
                }
            }
        }

        return $dp[0][0];
    }
}

$solution = new Solution();
var_dump($solution->minimumDeleteSum('sea', 'eat'));
