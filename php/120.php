<?php

class Solution {

    /**
     * @param Integer[][] $triangle
     * @return Integer
     */
    function minimumTotal($triangle) {
        $data = [];
        foreach ($triangle[count($triangle) - 1] as $key => $v) {
            $data[count($triangle) - 1][$key] = $v;
        }

        for ($i = count($triangle) - 2; $i >= 0; $i--) {
            $item = $triangle[$i];
            foreach ($item as $k1 => $v1) {
                $min = min($data[$i + 1][$k1], $data[$i + 1][$k1 + 1]);
                $data[$i][$k1] = $v1 + $min;
            }
        }
        return $data[0][0];
    }
}