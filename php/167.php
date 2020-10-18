<?php

class Solution {

    /**
     * @param Integer[] $numbers
     * @param Integer $target
     * @return Integer[]
     */

    function twoSum($numbers, $target) {
        $temp = [];
        foreach ($numbers as $k => $v) {
            $temp[$v] = $k;
        }

        foreach ($numbers as $k => $v) {
            $a = $target - $v;
            if (isset($temp[$a])) {
                return [++$k, ++$temp[$a]];
            }
        }
        return [];
    }
//  function twoSum($numbers, $target) {
//    $i = 0;
//    $j = count($numbers) - 1;
//    while ($i < $j) {
//      $sum = $numbers[$i] + $numbers[$j];
//      if ($sum == $target) {
//        return [$i + 1, $j + 1];
//      }
//      if ($sum < $target) {
//        $i++;
//      } else {
//        $j--;
//      }
//    }
//    return [];
//  }
//  function twoSum($numbers, $target) {
//    for ($i = 0; $i < count($numbers); $i++) {
//      $data = $target - $numbers[$i];
//
//      $result = $this->search($numbers, $i + 1, count($numbers), $data);
//      if ($result) {
//        return [$i + 1, $result + 1];
//      }
//    }
//    return [];
//  }
//
//  function search($numbers, $left, $right, $target) {
//    while ($right >= $left) {
//      $mid = (int)(($left + $right) / 2);
//
//      if ($numbers[$mid] == $target) return $mid;
//
//      if ($numbers[$mid] > $target) $right = $mid - 1;
//      if ($numbers[$mid] < $target) $left = $mid + 1;
//    }
//    return 0;
//  }
}

$numbers = [2, 7, 11, 15];
$target = 9;
$solution = new Solution();
var_dump($solution->twoSum($numbers, $target));