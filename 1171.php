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
    function removeZeroSumSublists($head) {
        if (!$head) {
            return $head;
        }
        $dummy = new ListNode(null);
        $dummy->next = $head;
        $pre = $dummy;
        while ($pre) {
            $cur = $pre->next;
            $sum = 0;
            while ($cur) {
                $sum += $cur->val;
                $cur = $cur->next;

                if ($sum == 0) {
                    $pre->next = $cur;
                    break;
                }
            }
            if (!$cur) $pre = $pre->next;
        }
        return $dummy->next;
    }
}