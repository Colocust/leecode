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
   * @return Integer[]
   */
  function reversePrint($head) {
    $cur = null;
    while ($head) {
      $next = $head->next;
      $head->next = $cur;
      $cur = $head;
      $head = $next;
    }
    $result = [];
    while ($cur) {
      $result[] = $cur->val;
      $cur = $cur->next;
    }
    return $result;
  }
}