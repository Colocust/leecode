<?php

class Solution {

  /**
   * @param Integer[] $nums
   * @return Integer
   */
  function findDuplicate($nums) {
//    $left = 1;
//    $right = count($nums) - 1;
//    $result = -1;
//    while ($left <= $right) {
//      $middle = (int)(($left + $right) / 2);
//
//      $cnt = 0;
//      for ($i = 0; $i < count($nums); $i++) {
//        if ($nums[$i] <= $middle) $cnt++;
//      }
//
//      if ($cnt <= $middle) $left++;
//      else {
//        $right--;
//        $result = $middle;
//      }
//    }
//    return $result;

    $slow = $nums[0];
    $fast = $nums[$nums[0]];

    while ($slow !== $fast) {
      $slow = $nums[$slow];
      $fast = $nums[$nums[$fast]];
    }
    $slow = 0;

    while ($slow !== $fast) {
      $fast = $nums[$fast];
      $slow = $nums[$slow];
    }
    return $slow;
  }
}

$solution = new Solution();
var_dump($solution->findDuplicate([3, 1, 3, 4, 2]));

