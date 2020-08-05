<?php

class Solution {

  /**
   * @param Integer[] $cost
   * @return Integer
   */
  function minCostClimbingStairs($cost) {
    $length = count($cost);
    $dp = [];
    $dp[$length] = 0;
    $dp[$length - 1] = $cost[$length - 1];

    for ($i = $length - 2; $i >= 0; $i--) {
      $dp[$i] = $cost[$i] + min($dp[$i + 1], $dp[$i + 2]);
    }
    return min($dp[0], $dp[1]);
  }
}

$solution = new Solution();
var_dump($solution->minCostClimbingStairs([1,0,0,0]));