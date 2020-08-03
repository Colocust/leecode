<?php
class Solution {

  private $data = [];

  /**
   * @param Integer $n
   * @return Integer
   */
  function climbStairs($n) {
    $this->data[1] = 1;
    $this->data[2] = 2;

    for ($i = 3; $i <= $n; $i++) {
      $this->data[$i] = $this->data[$i - 1] + $this->data[$i - 2];
    }
    return $this->data[$n];
  }
}