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
    function removeDuplicateNodes($head) {
        //时间复杂度O(n)
        //空间复杂度O(n)
        $data = [];
        $dummy = new ListNode(null);
        $dummy->next = $head;
        $pre = $dummy;
        while ($pre) {
            if (isset($data[$pre->next->val])) {
                $pre->next = $pre->next->next;
            } else {
                $data[$pre->next->val] = 1;
                $pre = $pre->next;
            }
        }
        return $dummy->next;
//    时间复杂度O(n2)
//    空间复杂度O(1)
//    php会超出时间限制
//    $l1 = $head;
//    while ($l1) {
//      $l2 = $l1;
//      while ($l2->next) {
//        if ($l2->next->val == $l1->val) {
//          $l2->next = $l2->next->next;
//        } else {
//          $l2 = $l2->next;
//        }
//      }
//      $l1 = $l1->next;
//    }
//    return $head;
    }
}