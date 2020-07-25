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
   * @param ListNode $headA
   * @param ListNode $headB
   * @return ListNode
   */
  function getIntersectionNode($headA, $headB) {
    $l1 = $headA;
    $l2 = $headB;

    while($l1 !== $l2) {
      $l1 = $l1 ? $l1->next : $headB;
      $l2 = $l2 ? $l2->next : $headA;
    }
    return $l1;
  }
}