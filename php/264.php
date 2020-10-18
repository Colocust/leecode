<?php

class Solution {

    /**
     * @param Integer $n
     * @return Integer
     */
    function nthUglyNumber($n) {
        $index2 = $index3 = $index5 = 0;
        $dp[0] = 1;

        for ($i = 1; $i < $n; $i++) {
            $ugly = min(2 * $dp[$index2], 3 * $dp[$index3], 5 * $dp[$index5]);
            $dp[$i] = $ugly;
            if ($ugly == $dp[$index2] * 2) $index2++;
            if ($ugly == $dp[$index3] * 3) $index3++;
            if ($ugly == $dp[$index5] * 5) $index5++;
        }

        return end($dp);
    }
}

$solution = new Solution();
var_dump($solution->nthUglyNumber(11));