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
   * @param Integer $n
   * @return ListNode
   */
  function removeNthFromEnd($head, $n) {
    $temp = $head;
    $length = 1;
    while ($temp->next) {
      $length++;
      $temp = $temp->next;
    }

    $cycleTime = $length - $n;
    $dummy = new ListNode(null);
    $dummy->next = $head;

    $current = $dummy;
    for ($i = 0; $i < $cycleTime; $i++) {
      $current = $current->next;
    }
    $current->next = $current->next->next;
    return $dummy->next;

//    $dummy = new ListNode(null);
//    $dummy->next = $head;
//    $fast = $dummy;
//    $slow = $dummy;
//    while ($n >= 0) {
//      $fast = $fast->next;
//      $n--;
//    }
//
//    while ($fast) {
//      $fast = $fast->next;
//      $slow = $slow->next;
//    }
//
//    $slow->next = $slow->next->next;
//    return $dummy->next;
  }
}