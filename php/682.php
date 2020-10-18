<?php

class Solution {

    /**
     * @param String[] $ops
     * @return Integer
     */
    function calPoints($ops) {
        $stack = [];
        $length = count($ops);
        for ($i = 0; $i < $length; $i++) {
            switch ($ops[$i]) {
                case 'C' :
                    array_pop($stack);
                    break;
                case 'D' :
                    array_push($stack, 2 * end($stack));
                    break;
                case '+':
                    $size = count($stack);
                    array_push($stack, $stack[$size - 1] + $stack[$size - 2]);
                    break;
                default:
                    array_push($stack, (int)$ops[$i]);
                    break;
            }
        }
        return array_sum($stack);
    }
}