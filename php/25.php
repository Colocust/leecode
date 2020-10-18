<?php

/**
 * Definition for a singly-linked list.
 * class ListNode {
 *     public $val = 0;
 *     public $next = null;
 *     function __construct($val) { $this->val = $val; }
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
     * @param Integer $k
     * @return ListNode
     */
    function reverseKGroup($head, $k) {
//    递归
//    $length = 0;
//    $cur = $head;
//    while ($cur) {
//      $length++;
//      if ($length == $k) {
//        $next = $cur->next;
//        $cur->next = null;
//
//        $reverse = null;
//        $pre = $head;
//        while ($pre) {
//          $node = $pre->next;
//          $pre->next = $reverse;
//          $reverse = $pre;
//          $pre = $node;
//        }
//        $head->next = $this->reverseKGroup($next, $k);
//        return $reverse;
//      }
//      $cur = $cur->next;
//    }
//    return $head;

        $dummy = new ListNode(null);
        $dummy->next = $head;
        $pre = $dummy;
        while ($head) {
            $tail = $pre;
            for ($i = 0; $i < $k; $i++) {
                $tail = $tail->next;
                if (is_null($tail)) return $dummy->next;
            }

            $next = $tail->next;
            $this->reverse($head, $tail);
            $pre->next = $tail;
            $head->next = $next;
            $pre = $head;
            $head = $next;
        }
        return $dummy->next;
    }

    function reverse(ListNode $head, ListNode $tail): void {
        $prev = $tail->next;
        while ($prev !== $tail) {
            $next = $head->next;
            $head->next = $prev;
            $prev = $head;
            $head = $next;
        }
    }

}

$node1 = new ListNode(1);
$node2 = new ListNode(2);
$node3 = new ListNode(3);
$node4 = new ListNode(4);
$node5 = new ListNode(5);

$node1->next = $node2;
$node2->next = $node3;
$node3->next = $node4;
$node4->next = $node5;

$solution = new Solution();
var_dump($solution->reverseKGroup($node1, 2));