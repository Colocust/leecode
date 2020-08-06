<?php

class Solution {

  /**
   * @param Integer[] $nums
   * @return Integer
   */
  function wiggleMaxLength($nums) {
    $length = count($nums);
    if ($length == 0) return 0;

    $down = [];
    $up = [];

    for ($i = 0; $i < $length; $i++) {
      $down[$i] = $up[$i] = 1;
    }

    for ($i = 1; $i < $length; $i++) {
      for ($j = 0; $j < $i; $j++) {
        if ($nums[$i] > $nums[$j]) {
          $up[$i] = max($up[$i], $down[$j] + 1);
        }
        if ($nums[$i] < $nums[$j]) {
          $down[$i] = max($down[$i], $up[$j] + 1);
        }
      }
    }
    return max(max($down), max($up));
  }
}

$solution = new Solution();
var_dump($solution->wiggleMaxLength([1, 17, 5, 10, 13, 15, 10, 5, 16, 8]));