<?php

class Solution {

  /**
   * @param Integer $n
   * @return Integer
   */
  function numTrees($n) {
    $dp = [];

    $dp[1] = 1;
    $dp[0] = 1;

    for ($i = 2; $i <= $n; $i++) {
      $dp[$i] = 0;
      for ($j = 1; $j <= $i; $j++) {
        $dp[$i] += $dp[$j - 1] * $dp[$i - $j];
      }
    }
    return $dp[$n];
  }
}

$solution = new Solution();
var_dump($solution->numTrees(2));