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
    function deleteDuplicates($head) {
        if (!$head || !$head->next) {
            return $head;
        }
        $dummy = new ListNode(null);
        $dummy->next = $head;

        $pre = $dummy;
        while ($head && $head->next) {
            if ($head->val !== $head->next->val) {
                $head = $head->next;
                $pre = $pre->next;
                continue;
            }
            while ($head->next && $head->val == $head->next->val) {
                $head = $head->next;
            }
            $pre->next = $head->next;
            $head = $head->next;
        }
        return $dummy->next;
//    递归
//    if(!$head || !$head->next) {
//      return $head;
//    }
//    $next = $head->next;
//    if($head->val === $next->val) {
//      while($next && $head->val === $next->val) {
//        $next = $next->next;
//      }
//      $head = $this->deleteDuplicates($next);
//    } else {
//      $head->next = $this->deleteDuplicates($head->next);
//    }
//    return $head;
    }
}