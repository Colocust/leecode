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
     * @param ListNode $l1
     * @param ListNode $l2
     * @return ListNode
     */
    function addTwoNumbers($l1, $l2) {
        $dummy = new ListNode(null);
        $pre = $dummy;
        $i = 0;
        while ($l1 && $l2) {
            $v = $l1->val + $l2->val + $i;
            $i = 0;
            if ($v >= 10) {
                $v = $v - 10;
                $i = 1;
            }
            $pre->next = new ListNode($v);
            $pre = $pre->next;
            $l1 = $l1->next;
            $l2 = $l2->next;
        }
        $l = $l1 ? $l1 : $l2;
        while ($l) {
            $v = $l->val + $i;
            $i = 0;
            if ($v >= 10) {
                $v = $v - 10;
                $i = 1;
            }
            $pre->next = new ListNode($v);
            $pre = $pre->next;
            $l = $l->next;
        }
        if ($i) {
            $pre->next = new ListNode($i);
        }
        return $dummy->next;
    }
}