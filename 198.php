<?php

class Solution {

  /**
   * @param Integer[] $nums
   * @return Integer
   */
  function rob($nums) {
    if (empty($nums)) return 0;
//    $length = count($nums);
//
//    $mem = [];
//    $mem[$length - 1] = $nums[$length - 1];
//
//    for ($i = $length - 1; $i >= 0; $i--) {
//      $mem[$i] = 0;
//      for ($j = $i; $j < $length; $j++) {
//        $append = $j + 2 < $length ? $mem[$j + 2] : 0;
//        $mem[$i] = max($mem[$i], $nums[$j] + $append);
//      }
//    }
//    return $mem[0];
    $length = count($nums);
    $mem = [];
    $mem[0] = $nums[0];

    for ($i = 1; $i < $length; $i++) {
      $mem[$i] = 0;
      for ($j = $i; $j >= 0; $j--) {
        $append = $j - 2 < 0 ? 0 : $mem[$j - 2];
        $mem[$i] = max($mem[$i], $nums[$j] + $append);
      }
    }
    return $mem[$length - 1];
  }
}

$solution = new Solution();
var_dump($solution->rob([1, 3, 2, 4, 5, 6]));