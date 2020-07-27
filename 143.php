<?php

/**
 * Definition for a singly-linked list.
 * class ListNode {
 *     public $val = 0;
 *     public $next = null;
 *     function __construct($val = 0, $next = null) {
 *         $this->val = $val;
 *         $this->next = $next;
 *     }
 * }
 */
class Solution {

  /**
   * @param ListNode $head
   * @return NULL
   */
  function reorderList($head) {
    if (!$head || !$head->next) {
      return $head;
    }

    $fast = $head->next;
    $slow = $head;

    while ($fast && $fast->next) {
      $fast = $fast->next->next;
      $slow = $slow->next;
    }

    $right = $slow->next;
    $slow->next = null;

    $cur = null;
    while ($right) {
      $next = $right->next;
      $right->next = $cur;
      $cur = $right;
      $right = $next;
    }

    $dummy = new ListNode(null);
    $pre = $dummy;
    $i = 1;
    while ($cur && $head) {
      if ($i % 2 == 1) {
        $pre->next = $head;
        $head = $head->next;
      } else {
        $pre->next = $cur;
        $cur = $cur->next;
      }
      $i++;
      $pre = $pre->next;
    }
    $pre->next = $cur ? $cur : $head;
    return $dummy->next;
  }
}