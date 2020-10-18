<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @return NULL
     */
    function sortColors(&$nums) {
        $zero = -1;
        $two = count($nums);

        for ($i = 0; $i < $two;) {
            if ($nums[$i] == 1) {
                $i++;
            } else if ($nums[$i] == 2) {
                $two--;
                $this->swap($nums, $two, $i);
            } else {
                $zero++;
                $this->swap($nums, $zero, $i);
                $i++;
            }
        }
        return null;
    }

    function swap(&$nums, $i, $j) {
        $temp = $nums[$i];
        $nums[$i] = $nums[$j];
        $nums[$j] = $temp;
    }
}

$solution = new Solution();
$data = [2, 0, 1, 0];
$solution->sortColors($data);
var_dump($data);