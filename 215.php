<?php

class Solution {

  /**
   * @param Integer[] $nums
   * @param Integer $k
   * @return Integer
   */
  function findKthLargest($nums, $k) {
    $stack = new SplStack();
    $stack->push(0);
    $stack->push(count($nums) - 1);

    $target = count($nums) - $k;
    while (!$stack->isEmpty()) {
      $right = $stack->pop();
      $left = $stack->pop();

      $pivot = $this->findPivot($nums, $left, $right);
      if ($pivot == $target) {
        return $nums[$pivot];
      }
      if ($pivot - 1 > $left) {
        $stack->push($left);
        $stack->push($pivot - 1);
      }
      if ($right - 1 > $pivot) {
        $stack->push($pivot + 1);
        $stack->push($right);
      }
    }
    return -1;
  }

  function findPivot(&$nums, $left, $right): int {
    $pivot = $nums[$left];

    while ($left < $right) {
      while ($left < $right && $nums[$right] >= $pivot) {
        $right--;
      }
      $nums[$left] = $nums[$right];
      while ($left < $right && $nums[$left] < $pivot) {
        $left++;
      }
      $nums[$right] = $nums[$left];
    }
    $nums[$left] = $pivot;
    return $left;
  }
}

$solution = new Solution();

var_dump($solution->findKthLargest([3, 2, 1, 5, 6, 4], 2));