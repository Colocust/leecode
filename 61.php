<?php

/**
 * Definition for a singly-linked list.
 * class ListNode {
 *     public $val = 0;
 *     public $next = null;
 *     function __construct($val) { $this->val = $val; }
 * }
 */
class Solution {

  /**
   * @param ListNode $head
   * @param Integer $k
   * @return ListNode
   */
  function rotateRight($head, $k) {
    if (!$head || $k == 0) {
      return $head;
    }
    $length = 1;
    $cur = $head;
    while ($cur->next) {
      $cur = $cur->next;
      $length++;
    }

    $cur->next = $head;
    $tail = $cur;
    $cur = $head;

    $cycleTime = $length - ($k % $length);
    for ($i = 0; $i < $cycleTime; $i++) {
      $tail = $tail->next;
      $cur = $cur->next;
    }
    $tail->next = null;
    return $cur;
  }
}