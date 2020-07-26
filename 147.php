<?php

/**
 * Definition for a singly-linked list.
 * class ListNode {
 *     public $val = 0;
 *     public $next = null;
 *     function __construct($val) { $this->val = $val; }
 * }
 */
class ListNode {
  public $val = 0;
  public $next = null;

  function __construct($val) {
    $this->val = $val;
  }
}

class Solution {

  /**
   * @param ListNode $head
   * @return ListNode
   */
  function insertionSortList($head) {
    if (!$head || !$head->next) {
      return $head;
    }

    $dummy = new ListNode(null);
    $dummy->next = $head;
    while ($head && $head->next) {
      if ($head->val < $head->next->val) {
        $head = $head->next;
        continue;
      }

      $pre = $dummy;
      while ($pre->next->val < $head->next->val) {
        $pre = $pre->next;
      }
      $next = $head->next;
      $head->next = $next->next;
      $next->next = $pre->next;
      $pre->next = $next;

      var_dump($dummy->next);
    }
    return $dummy->next;
  }
}

$node1 = new ListNode(4);
$node2 = new ListNode(2);
$node3 = new ListNode(1);
$node4 = new ListNode(3);
$node1->next = $node2;
$node2->next = $node3;
$node3->next = $node4;

$solution = new Solution();
var_dump($solution->insertionSortList($node1));