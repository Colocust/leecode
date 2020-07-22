<?php

class Solution {

  /**
   * @param String $S
   * @return String
   */
  function removeDuplicates($S) {
    $length = strlen($S);
    $stack = [];
    for ($i = 0; $i < $length; $i++) {
      if ($S[$i] === end($stack)) {
        array_pop($stack);
      } else {
        array_push($stack, $S[$i]);
      }
    }
    return implode('', $stack);
  }
}
