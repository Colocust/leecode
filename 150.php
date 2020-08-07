<?php

class Solution {

    /**
     * @param String[] $tokens
     * @return Integer
     */
    function evalRPN($tokens) {
        $stack = new SplStack();
        for ($i = 0; $i < count($tokens); $i++) {
            if (is_numeric($tokens[$i])) {
                $stack->push($tokens[$i]);
                continue;
            }
            $n1 = $stack->pop();
            $n2 = $stack->pop();
            switch ($tokens[$i]) {
                case '+':
                    $stack[] = $n2 + $n1;
                    break;
                case '-':
                    $stack[] = $n2 - $n1;
                    break;
                case '*':
                    $stack[] = $n2 * $n1;
                    break;
                case '/':
                    $stack[] = (int)($n2 / $n1);
                    break;
                default:
                    break;
            }
        }
        $sum = 0;
        while (!$stack->isEmpty()) {
            $sum += $stack->pop();
        }
        return $sum;
    }
}

$solution = new Solution();
var_dump($solution->evalRPN(["10", "6", "9", "3", "+", "-11", "*", "/", "*", "17", "+", "5", "+"]));