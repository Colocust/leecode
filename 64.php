<?php

class Solution {

  /**
   * @param Integer[][] $grid
   * @return Integer
   */
  function minPathSum($grid) {
    $data = [];

    for ($i = count($grid) - 1; $i >= 0; $i--) {
      for ($j = count($grid[$i]) - 1; $j >= 0; $j--) {
        if ($j == count($grid[$i]) - 1 && $i == count($grid) - 1) {
          $data[$i][$j] = $grid[$i][$j];
          continue;
        }
        if ($j == count($grid[$i]) - 1) {
          $data[$i][$j] = $grid[$i][$j] + $data[$i + 1][$j];
          continue;
        }
        if ($i == count($grid) - 1) {
          $data[$i][$j] = $grid[$i][$j] + $data[$i][$j + 1];
          continue;
        }
        $data[$i][$j] = $grid[$i][$j] + min($data[$i + 1][$j], $data[$i][$j + 1]);
      }
    }
    return $data[0][0];
  }
}