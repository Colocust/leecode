<?php

class Solution {

  /**
   * @param Integer $n
   * @param String[] $logs
   * @return Integer[]
   */
  function exclusiveTime($n, $logs) {
    $stack = [];
    $result = [];
    for ($i = 0; $i < $n; $i++) {
      $result[$i] = 0;
    }

    foreach ($logs as $item) {
      $log = explode(':', $item);
      if ($log[1] == 'start') {
        $stack[] = $log;
        continue;
      }

      $pop = array_pop($stack);
      $cost = $log[2] - $pop[2] + 1;
      $result[$log[0]] += $cost;

      if ($stack) {
        $result[end($stack)[0]] -= $cost;
      }
    }

    ksort($result);
    return $result;
  }
}

$solution = new Solution();
var_dump($solution->exclusiveTime(1, ["0:start:0", "0:start:1", "0:start:2", "0:end:3", "0:end:4", "0:end:5"]));