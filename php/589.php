<?php
/**
 * Definition for a Node.
 * class Node {
 *     public $val = null;
 *     public $children = null;
 *     function __construct($val = 0) {
 *         $this->val = $val;
 *         $this->children = array();
 *     }
 * }
 */

class Solution {
    /**
     * @param Node $root
     * @return integer[]
     */
    function preorder($root) {
//        if (!$root) return [];
//
//        $results[] = $root->val;
//
//        foreach ($root->children as $child) {
//            $results = array_merge($results, $this->preorder($child));
//        }
//        return $results;
        if (!$root) return [];

        $stack[] = $root;
        $results = [];
        while ($stack) {
            $pop = array_pop($stack);
            $results[] = $pop->val;
            $children = array_reverse($pop->children);
            foreach ($children as $child) {
                $stack[] = $child;
            }
        }
        return $results;
    }
}