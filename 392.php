<?php

class Solution {

    /**
     * @param String $s
     * @param String $t
     * @return Boolean
     */
    function isSubsequence($s, $t) {
        $l1 = strlen($s);
        $l2 = strlen($t);

        if ($l1 == 0) return true;

        $is = 0;
        $it = 0;

        while ($it < $l2) {
            if ($s[$is] == $t[$it]) {
                $it++;
                if (++$is == $l1) {
                    return true;
                }
            } else {
                $it++;
            }
        }
        return false;
    }
}

$solution = new Solution();
var_dump($solution->isSubsequence('abc', 'ahbgdc'));