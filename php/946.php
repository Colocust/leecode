<?php

class Solution {

    /**
     * @param Integer[] $pushed
     * @param Integer[] $popped
     * @return Boolean
     */
    function validateStackSequences($pushed, $popped) {
        $stack = [];
        $i = 0;
        foreach ($pushed as $e) {
            array_push($stack, $e);
            while ($stack && end($stack) == $popped[$i]) {
                array_pop($stack);
                $i++;
            }
        }
        return $stack ? false : true;
    }
}
