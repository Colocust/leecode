<?php

class Solution {

    /**
     * @param String $S
     * @return Boolean
     */
    function isValid($S) {
        $stack = new SplStack();
        $length = strlen($S);
        for ($i = 0; $i < $length; $i++) {
            if ($S[$i] == 'b') {
                if ($stack->isEmpty() || $stack->top() !== 'a') {
                    return false;
                }
                $stack->push('b');
            } else if ($S[$i] == 'c') {
                if ($stack->isEmpty() || $stack->top() !== 'b') {
                    return false;
                }
                $stack->pop();
                $stack->pop();
            } else {
                $stack->push($S[$i]);
            }
        }
        return $stack->isEmpty();
    }
}
