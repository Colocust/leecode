<?php

class Solution {

  /**
   * @param String $S
   * @return Integer
   */
  function scoreOfParentheses($S) {
    $length = strlen($S);
    $stack = [];
    for ($i = 0; $i < $length; $i++) {
      if ($S[$i] == '(') {
        array_push($stack, $S[$i]);
      } else {
        if (end($stack) == '(') {
          array_pop($stack);
          array_push($stack, 1);
        } else {
          $sum = 0;
          while (end($stack) != '(') {
            $sum += array_pop($stack);
          }
          $sum = $sum * 2;
          array_pop($stack);
          array_push($stack, $sum);
        }
      }
    }
    return array_sum($stack);
  }
}
