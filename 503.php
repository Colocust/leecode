<?php

class Solution {

  /**
   * @param Integer[] $nums
   * @return Integer[]
   */
  function nextGreaterElements($nums) {
    $length = count($nums);
    $stack = [];
    $result = [];

    for ($i = 0; $i < 2 * $length; $i++) {
      $nums[$i] = $nums[$i % $length];

      while ($stack && $nums[end($stack)] < $nums[$i]) {
        $result[array_pop($stack)] = $nums[$i];
      }
      $stack[] = $i;
    }
    return array_splice($result, 0, $length);
  }
}

$solution = new Solution();
var_dump($solution->nextGreaterElements([1, 2, 3, 4, 3]));
