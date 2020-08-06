<?php

class Solution {

  /**
   * @param Integer[] $coins
   * @param Integer $amount
   * @return Integer
   */
  function coinChange($coins, $amount) {
    if ($amount == 0) return 0;

    $dp = [];
    $dp[0] = 0;
    for ($i = 1; $i <= $amount; $i++) {
      $dp[$i] = PHP_INT_MAX;
    }

    for ($i = 1; $i <= $amount; $i++) {
      for ($j = 0; $j < count($coins); $j++) {
        if ($i >= $coins[$j]) {
          $dp[$i] = min($dp[$i], $dp[$i - $coins[$j]] + 1);
        }
      }
    }
    return $dp[$amount] == PHP_INT_MAX ? -1 : $dp[$amount];
  }
}

$solution = new Solution();
var_dump($solution->coinChange([1, 2, 5], 11));