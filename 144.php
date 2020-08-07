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
    function preorderTraversal($root) {
        if (!$root) {
            return [];
        }

        $stack = [];
        $stack[] = $root->val;

        $left = $this->preorderTraversal($root->left);
        foreach ($left as $lV) {
            $stack[] = $lV;
        }

        $right = $this->preorderTraversal($root->right);
        foreach ($right as $rV) {
            $stack[] = $rV;
        }

        return $stack;
    }
}