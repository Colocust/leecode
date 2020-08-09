<?php

class Solution {

    /**
     * @param Integer[] $days
     * @param Integer[] $costs
     * @return Integer
     */
    function mincostTickets($days, $costs) {
        $max = max($days);
        $min = min($days);

        $index = count($days) - 1;

        $dp[$max + 30] = 0;
        for ($i = $max + 29; $i >= $min; $i--) {
            $dp[$i] = $dp[$i + 1];

            if ($i == $days[$index]) {
                $dp[$i] = min($costs[0] + $dp[$i + 1], $costs[1] + $dp[$i + 7], $costs[2] + $dp[$i + 30]);
                $index--;
            }
        }
        return $dp[$min];
    }
}

$solution = new Solution();
var_dump($solution->mincostTickets([1, 4, 6, 7, 8, 20], [2, 7, 15]));