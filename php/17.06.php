<?php

class Solution {

    /**
     * @param Integer $n
     * @return Integer
     */
    function numberOf2sInRange($n) {
        $dp = array_fill(1, $n, 0);
        for ($i = 2; $i <= $n; $i++) {

        }

        return $dp[$n];
    }
}