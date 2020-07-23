<?php

class Solution {

  /**
   * @param String $s
   * @param Integer $k
   * @return String
   */
  function removeDuplicates($s, $k) {
    $tStack = [];
    $vStack = [];
    $length = strlen($s);
    for ($i = 0; $i < $length; $i++) {
      if ($vStack && end($vStack) == $s[$i]) {
        if (end($tStack) == $k - 1) {
          for ($j = 0; $j < $k - 1; $j++) {
            array_pop($vStack);
          }
          array_pop($tStack);
        } else {
          array_push($vStack, $s[$i]);
          array_push($tStack, array_pop($tStack) + 1);
        }
      } else {
        $vStack[] = $s[$i];
        $tStack[] = 1;
      }
    }
    return implode('', $vStack);
  }
}

$solution = new Solution();
var_dump($solution->removeDuplicates('pbbcggttciiippooaais', 2));