<?php

/**
 * Definition for a singly-linked list.
 * class ListNode {
 *     public $val = 0;
 *     public $next = null;
 *     function __construct($val = 0, $next = null) {
 *         $this->val = $val;
 *         $this->next = $next;
 *     }
 * }
 */

class ListNode {
    public $val = 0;
    public $next = null;

    function __construct($val) {
        $this->val = $val;
    }
}

class Solution {

    /**
     * @param ListNode $head
     * @return ListNode
     */
    function oddEvenList($head) {
        if (!$head || !$head->next) {
            return $head;
        }
        $slow = $head;
        $fast = $head->next;

        $current = $fast;

        while ($slow->next && $fast->next) {
            $slow->next = $slow->next->next;
            $fast->next = $fast->next->next;

            $slow = $slow->next;
            $fast = $fast->next;
        }

        $slow->next = $current;
        return $head;
    }
}

$node1 = new ListNode(1);
$node2 = new ListNode(2);
$node3 = new ListNode(3);
$node4 = new ListNode(4);
$node1->next = $node2;
$node2->next = $node3;
$node3->next = $node4;


$solution = new Solution();
var_dump($solution->oddEvenList($node1));