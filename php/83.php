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
        $cur = $head;
        while ($cur && $cur->next) {
            if ($cur->val == $cur->next->val) {
                $cur->next = $cur->next->next;
            } else {
                $cur = $cur->next;
            }
        }
        return $head;
    }
}
