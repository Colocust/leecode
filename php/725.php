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
     * @param ListNode $root
     * @param Integer $k
     * @return ListNode[]
     */
    function splitListToParts($root, $k) {
        $length = 0;
        $cur = $root;
        while ($cur) {
            $length++;
            $cur = $cur->next;
        }
        $avg = (int)($length / $k);
        $remind = (int)($length % $k);

        $results = [];
        for ($i = 0; $i < $k; $i++) {
            $pre = null;
            $results[] = $root;
            $cycleTime = $remind ? $avg + 1 : $avg;

            for ($j = 0; $j < $cycleTime; $j++) {
                $pre = $root;
                $root = $root->next;
            }

            if ($remind) $remind--;
            if ($pre) $pre->next = null;
        }
        return $results;
    }
}