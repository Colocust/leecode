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
   * @param ListNode $l1
   * @param ListNode $l2
   * @return ListNode
   */
  function addTwoNumbers($l1, $l2) {
    $results = [];
    $i = 0;
    while ($l1 && $l2) {
      $sum = $l1->val + $l2->val + $i;
      $i = 0;
      if ($sum >= 10) {
        $sum -= 10;
        $i = 1;
      }
      $results[] = $sum;
      $l1 = $l1->next;
      $l2 = $l2->next;
    }
    $linkedList = $l1 ? $l1 : $l2;
    while ($linkedList) {
      $sum = $linkedList->val + $i;
      $i = 0;
      if ($sum >= 10) {
        $sum -= 10;
        $i = 1;
      }
      $results[] = $sum;
      $linkedList = $linkedList->next;
    }
    if ($i) $results[] = $i;
    $dummy = new ListNode(null);
    $pre = $dummy;
    foreach ($results as $v) {
      $pre->next = new ListNode($v);
      $pre = $pre->next;
    }
    return $dummy->next;
  }
}