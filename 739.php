<?php

class Solution {

    /**
     * @param Integer[] $T
     * @return Integer[]
     */
    function dailyTemperatures($T) {
        if (count($T) == 0) {
            return [];
        }
        $stack = new SplStack();

        $ret = [];
        foreach ($T as $day => $t) {
            $ret[$day] = 0;
            while (!$stack->isEmpty() && $T[$stack->top()] < $t) {
                $pop = $stack->pop();
                $ret[$pop] = $day - $pop;
            }
            $stack->push($day);
        }
        return $ret;
    }
}