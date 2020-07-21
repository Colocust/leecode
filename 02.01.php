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
   * @return ListNode
   */
  function removeDuplicateNodes($head) {
    $data = [];
    $dummy = new ListNode(null);
    $dummy->next = $head;
    $pre = $dummy;
    while ($pre) {
      if (isset($data[$pre->next->val])) {
        $pre->next = $pre->next->next;
      } else {
        $data[$pre->next->val] = 1;
        $pre = $pre->next;
      }
    }
    return $dummy->next;
  }
}