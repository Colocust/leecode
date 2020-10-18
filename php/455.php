<?php

class Solution {

    /**
     * @param Integer[] $g
     * @param Integer[] $s
     * @return Integer
     */
    function findContentChildren($g, $s) {
        $ig = count($g) - 1;
        $is = count($s) - 1;

        sort($g);
        sort($s);

        $res = 0;

        while ($ig >= 0 && $is >= 0) {
            if ($g[$ig] <= $s[$is]) {
                $is--;
                $ig--;
                $res++;
            } else {
                $ig--;
            }
        }

        return $res;
    }
}

$solution = new Solution();
var_dump($solution->findContentChildren([1, 2], [1, 2, 3]));