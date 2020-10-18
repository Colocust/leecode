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
    function middleNode($head) {
        if (!$head || !$head->next) {
            return $head;
        }
        $fast = $head;
        $slow = $head;
        while ($fast && $fast->next) {
            $fast = $fast->next->next;
            $slow = $slow->next;
        }
        return $slow;
    }
}