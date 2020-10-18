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
     * @return Integer[]
     */
    function nextLargerNodes($head) {
        $value = [];
        while ($head) {
            $value[] = $head->val;
            $head = $head->next;
        }
        $result = [];
        $stack = [];

        foreach ($value as $key => $item) {
            $result[$key] = 0;
            while ($stack && $value[end($stack)] < $item) {
                $result[array_pop($stack)] = $item;
            }
            $stack[] = $key;
        }
        ksort($result);
        return $result;
    }
}