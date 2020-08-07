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
    function sortList($head) {
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
        $left = $head;
        $left = $this->sortList($left);
        $right = $this->sortList($right);

        $dummyHead = new ListNode(null);
        $pre = $dummyHead;
        while ($left && $right) {
            if ($left->val < $right->val) {
                $pre->next = $left;
                $left = $left->next;
            } else {
                $pre->next = $right;
                $right = $right->next;
            }
            $pre = $pre->next;
        }
        $pre->next = $left ? $left : $right;
        return $dummyHead->next;
    }
}