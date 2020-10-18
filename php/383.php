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
     * @param Integer $k
     * @return Integer
     */
    function kthToLast($head, $k) {
        $fast = $head;
        $slow = $head;
        while ($k > 0) {
            $fast = $fast->next;
            $k--;
        }
        while ($fast) {
            $fast = $fast->next;
            $slow = $slow->next;
        }
        return $slow->val;
    }
}