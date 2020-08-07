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
     * @param Integer $val
     * @return ListNode
     */
    function removeElements($head, $val) {
//    递归
//    if(!$head) {
//      return null;
//    }
//    $head->next = $this->removeElements($head->next,$val);
//    return $head->val === $val ? $head->next : $head;
//
//    dummyHead
        $dummyHead = new ListNode(null);
        $dummyHead->next = $head;
        $current = $dummyHead;
        while ($current) {
            if ($current->next->val === $val) {
                $current->next = $current->next->next;
            } else {
                $current = $current->next;
            }
        }
        return $dummyHead->next;
    }
}