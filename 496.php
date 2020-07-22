<?php
class Solution {

  /**
   * @param Integer[] $nums1
   * @param Integer[] $nums2
   * @return Integer[]
   */
  function nextGreaterElement($nums1, $nums2) {
    $map = [];
    $length = count($nums2);
    for ($i = 0;$i <$length ;$i++) {
      $temp = -1;
      for($j = $i+1;$j<$length;$j++) {
        if($nums2[$j] > $nums2[$i]) {
          $temp = $nums2[$j];
          break;
        }
      }
      $map[$nums2[$i]] = $temp;
    }
    $return = [];
    foreach($nums1 as $item) {
      $return[] = $map[$item];
    }
    return $return;
  }
}