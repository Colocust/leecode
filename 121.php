<?php

class Solution {

  /**
   * @param Integer[] $prices
   * @return Integer
   */
  function maxProfit($prices) {
    //记录i之前的最小值以及最大收益 比较
    $min = $prices[0];
    $max = 0;

    for ($i = 1; $i < count($prices); $i++) {
      $max = max($max, $prices[$i] - $min);
      $min = min($min, $prices[$i]);
    }

    return $max;
  }
}