<?php

class Solution {

  /**
   * @param Integer[] $nums
   * @param Integer $target
   * @return Integer[]
   */
  function twoSum($nums, $target) {
//    O(n)
    $map = [];
    foreach ($nums as $k => $v) {
      $map[$v] = $k;
    }

    foreach ($nums as $k => $v) {
      $complement = $target - $v;
      if (isset($map[$complement]) && $map[$complement] !== $k) {
        return [$map[$complement], $k];
      }
    }
    return [];

//    O(n^2)
//    $length = count($nums);
//    for ($i = 0; $i < $length; $i++) {
//      for ($j = $i + 1; $j < $length; $j++) {
//        if ($nums[$i] + $nums[$j] == $target) {
//          return [$i, $j];
//        }
//      }
//    }
//    return [];
  }
}

$solution = new Solution();
var_dump($solution->twoSum([3, 2, 4], 6));