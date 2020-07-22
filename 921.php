<?php

class Solution {

  /**
   * @param String $S
   * @return Integer
   */
  function minAddToMakeValid($S) {
    $stack = [];
    $length = strlen($S);
    for ($i = 0; $i < $length; $i++) {
      if (empty($stack)) {
        array_push($stack, $S[$i]);
        continue;
      }
      if ($S[$i] == '(' || end($stack) == ')') {
        $stack[] = $S[$i];
      } else {
        array_pop($stack);
      }
    }
    return count($stack);
  }
}