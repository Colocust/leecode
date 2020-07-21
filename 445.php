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
    $s1 = [];
    $s2 = [];
    while ($l1) {
      $s1[] = $l1->val;
      $l1 = $l1->next;
    }
    while ($l2) {
      $s2[] = $l2->val;
      $l2 = $l2->next;
    }
    $s3 = [];
    $i = 0;
    while ($s1 && $s2) {
      $v = array_pop($s1) + array_pop($s2) + $i;
      $i = 0;
      if ($v >= 10) {
        $s3[] = $v - 10;
        $i = 1;
      } else {
        $s3[] = $v;
      }
    }
    $s = $s1 ? $s1 : $s2;
    while ($s) {
      $v = array_pop($s) + $i;
      $i = 0;
      if ($v >= 10) {
        $s3[] = $v - 10;
        $i = 1;
      } else {
        $s3[] = $v;
      }
    }
    if ($i) {
      $s3[] = $i;
    }
    $dummy = new ListNode(null);
    $pre = $dummy;
    while ($s3) {
      $pre->next = new ListNode(array_pop($s3));
      $pre = $pre->next;
    }
    return $dummy->next;
  }
}