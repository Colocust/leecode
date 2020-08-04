<?php

class Solution {

  /**
   * @param Integer[] $nums
   * @return Integer
   */
  function rob($nums) {
    if (empty($nums)) return 0;
    if (count($nums) == 1) return $nums[0];
    $dp1 = [];
    $dp2 = [];

    $length = count($nums);

    //[0,n-2]
    //[1,n-1]
    $dp1[$length - 2] = $nums[$length - 2];
    for ($i = $length - 3; $i >= 0; $i--) {
      $dp1[$i] = 0;

      for ($j = $i; $j <= $length - 2; $j++) {
        $append = $j + 2 <= $length - 2 ? $dp1[$j + 2] : 0;
        $dp1[$i] = max($dp1[$i], $nums[$j] + $append);
      }
    }

    $dp2[$length - 1] = $nums[$length - 1];
    for ($i = $length - 2; $i >= 1; $i--) {
      $dp2[$i] = 0;

      for ($j = $i; $j <= $length - 1; $j++) {
        $append = $j + 2 <= $length - 1 ? $dp2[$j + 2] : 0;
        $dp2[$i] = max($dp2[$i], $nums[$j] + $append);
      }
    }
    return max($dp1[0], $dp2[1]);
  }
}

$solution = new Solution();
var_dump($solution->rob([0]));