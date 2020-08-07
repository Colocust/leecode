<?php

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
     * @param Integer $m
     * @param Integer $n
     * @return ListNode
     */
    function reverseBetween($head, $m, $n) {
        // 1 2 3 4 5
        // 2 3

        // pre = 1
        // cur = 2
        // next = 3
        // cur->next = 4
        // next->next = 2
        // pre->next = 1
        $dummy = new ListNode(null);
        $dummy->next = $head;
        $pre = $dummy;
        for ($i = 1; $i < $m; $i++) {
            $pre = $pre->next;
        }

        $cur = $pre->next;
        for ($j = $m; $j < $n; $j++) {
            $next = $cur->next;
            $cur->next = $next->next;
            $next->next = $pre->next;
            $pre->next = $next;
        }

        return $dummy->next;
    }
}

$nodeA1 = new ListNode(3);
$nodeA2 = new ListNode(2);
$nodeA3 = new ListNode(0);
$nodeA4 = new ListNode(-4);


$nodeA1->next = $nodeA2;
$nodeA2->next = $nodeA3;
$nodeA3->next = $nodeA4;


$solution = new Solution();
var_dump($solution->reverseBetween($nodeA1, 2, 3));