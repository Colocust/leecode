<?php

class Solution {

    /**
     * @param String $s
     * @return Integer
     */
    function lengthOfLongestSubstring($s) {
        $left = 0;
        $right = -1;

        $map = [];
        $ret = 0;
        while ($left < strlen($s)) {
            if ($right + 1 < strlen($s) && !isset($map[$s[$right + 1]])) {
                $map[$s[$right + 1]] = 1;
                $right++;
            } else {
                unset($map[$s[$left]]);
                $left++;
            }
            $ret = max($ret, $right - $left + 1);
        }
        return $ret;
    }
}

$str = 'pwwkew';
$solution = new Solution();
var_dump($solution->lengthOfLongestSubstring($str));