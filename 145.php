<?php

/**
 * Definition for a binary tree node.
 * class TreeNode {
 *     public $val = null;
 *     public $left = null;
 *     public $right = null;
 *     function __construct($value) { $this->val = $value; }
 * }
 */

class Solution {

    /**
     * @param TreeNode $root
     * @return Integer[]
     */
    function postorderTraversal($root) {
        if (!$root) {
            return [];
        }
        $stack = [];

        $left = $this->postorderTraversal($root->left);
        $right = $this->postorderTraversal($root->right);
        foreach ($left as $vL) {
            $stack[] = $vL;
        }
        foreach ($right as $vR) {
            $stack[] = $vR;
        }
        $stack[] = $root->val;
        return $stack;
    }
}
