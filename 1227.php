<?php

class Solution {

  /**
   * @param Integer[][] $matrix
   * @return Integer
   */
  function countSquares($matrix) {
    $dp = [];
    $sum = 0;

    for ($i = 0; $i < count($matrix); $i++) {
      for ($j = 0; $j < count($matrix[0]); $j++) {
        if ($i == 0 || $j == 0) {
          $dp[$i][$j] = $matrix[$i][$j];
        } else if ($matrix[$i][$j] == 0) {
          $dp[$i][$j] = 0;
        } else {
          $dp[$i][$j] = min($dp[$i - 1][$j], $dp[$i - 1][$j - 1], $dp[$i][$j - 1]) + 1;
        }

        $sum += $dp[$i][$j];
      }
    }
    return $sum;
  }
}

$solution = new Solution();
var_dump($solution->countSquares([
  [0, 1, 1, 1],
  [1, 1, 1, 1],
  [0, 1, 1, 1]
]));

