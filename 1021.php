<?php

class Solution {

  /**
   * @param String $S
   * @return String
   */
  function removeOuterParentheses($S) {
    $stack = [];
    $ret = '';
    $length = strlen($S);
    for($i = 0; $i < $length; $i++) {
      if($S[$i] === ')') {
        array_pop($stack);
      }
      if(!empty($stack)) {
        $ret .= $S[$i];
      }
      if($S[$i] === '(') {
        array_push($stack,'(');
      }
    }
    return $ret;
  }
}

$solution = new Solution();
var_dump($solution->removeOuterParentheses("(()())(())"));