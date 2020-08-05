<?php

class Solution {

  /**
   * @param Integer[][] $grid
   * @return Integer
   */
  function maxValue($grid) {
    $dp = [];
    $width = count($grid[0]);
    $height = count($grid);

    for ($i = $height - 1; $i >= 0; $i--) {
      for ($j = $width - 1; $j >= 0; $j--) {
        if ($i == $height - 1 && $j == $width - 1) {
          $dp[$i][$j] = $grid[$i][$j];
          continue;
        }
        if ($i == $height - 1) {
          $dp[$i][$j] = $grid[$i][$j] + $dp[$i][$j + 1];
          continue;
        }
        if ($j == $width - 1) {
          $dp[$i][$j] = $grid[$i][$j] + $dp[$i + 1][$j];
          continue;
        }
        $dp[$i][$j] = $grid[$i][$j] + max($dp[$i + 1][$j], $dp[$i][$j + 1]);
      }
    }
    var_dump($dp);exit;
    return $dp[0][0];
  }
}

$solution = new Solution();
var_dump($solution->maxValue([
  [1, 2, 3],
  [4, 5, 6]
]));