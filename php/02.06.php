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
    function isPalindrome($head) {
        $fast = $head;
        $slow = $head;
        while ($fast) {
            $fast = $fast->next->next;
            $slow = $slow->next;
        }
        $cur = null;
        while ($slow) {
            $next = $slow->next;
            $slow->next = $cur;
            $cur = $slow;
            $slow = $next;
        }
        while ($cur) {
            if ($cur->val !== $head->val) {
                return false;
            }
            $cur = $cur->next;
            $head = $head->next;
        }
        return true;
    }
}