<?php

class Solution {

  /**
   * @param String $s
   * @return String
   */
  function decodeString($s) {
    $stack = [];
    $length = strlen($s);
    for ($i = 0; $i < $length; $i++) {
      if ($s[$i] == ']') {
        $temp = '';
        while (end($stack) != '[') {
          $temp .= array_pop($stack);
        }
        array_pop($stack);

        $time = '';
        while (is_numeric(end($stack))) {
          $time .= array_pop($stack);
        }
        $time = (int)(strrev($time));
        while ($time) {
          for ($j = strlen($temp) - 1; $j >= 0; $j--) {
            $stack[] = $temp[$j];
          }
          $time--;
        }
      } else {
        $stack[] = $s[$i];
      }
    }
    return implode('', $stack);
  }
}

$solution = new Solution();
var_dump($solution->decodeString('abc3[cd]xyz'));