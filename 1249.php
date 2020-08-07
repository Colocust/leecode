<?php

class Solution {

    /**
     * @param String $s
     * @return String
     */
    function minRemoveToMakeValid($s) {
        $arr = str_split($s);
        $stack = [];

        foreach ($arr as $key => $value) {
            if ($value == '(') {
                $stack[] = $key;
                continue;
            }
            if ($value == ')') {
                if (empty($stack) || $arr[end($stack)] == ')') {
                    $stack[] = $key;
                } else {
                    array_pop($stack);
                }
            }
        }
        foreach ($stack as $unset) {
            unset($arr[$unset]);
        }
        return implode('', $arr);
    }
}

$solution = new Solution();
var_dump($solution->minRemoveToMakeValid("lee(t(c)o)de)"));