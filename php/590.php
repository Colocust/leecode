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
    function postorder($root) {
        if (!$root) return [];

        $results = [];
//
//        foreach ($root->children as $child) {
//           $results = array_merge($results, $this->postorder($child));
//        }
//        $results[] = $root->val;

        $stack[] = $root;

        while ($stack) {
            $pop = array_pop($stack);
            $results[] = $pop->val;

            foreach ($pop->children as $child) {
                $stack[] = $child;
            }
        }


        return array_reverse($results);
    }
}