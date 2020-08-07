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
     * @param Integer $x
     * @return ListNode
     */
    function partition($head, $x) {
        if (!$head || !$head->next) {
            return $head;
        }

        $cur = $head;
        $p = $head;
        while ($cur) {
            if ($cur->val < $x) {
                $temp = $p->val;
                $p->val = $cur->val;
                $cur->val = $temp;
                $p = $p->next;
            }
            $cur = $cur->next;
        }

        return $head;
    }
}