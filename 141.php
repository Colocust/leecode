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
   * @return Boolean
   */
  function hasCycle($head) {
    if (!$head || !$head->next) {
      return false;
    }
    $fast = $head->next;
    $slow = $head;
    while ($fast) {

      if ($fast === $slow) {
        return true;
      }
      $fast = $fast->next->next;
      $slow = $slow->next;
    }
    return false;
  }
}