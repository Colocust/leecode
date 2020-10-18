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
    function detectCycle($head) {
        if (!$head || !$head->next) {
            return null;
        }

        $fast = $head->next->next;
        $slow = $head->next;

        while ($slow !== $fast) {
            $fast = $fast->next->next;
            $slow = $slow->next;
        }

        $l1 = $slow;
        $l2 = $head;
        while ($l1 !== $l2) {
            $l1 = $l1->next;
            $l2 = $l2->next;
        }
        return $l1;
    }
}
