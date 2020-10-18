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
    private $sum = 0;

    /**
     * @param TreeNode $root
     * @return TreeNode
     */
    function convertBST($root) {
        if (!$root) return $root;

        $this->greaterTree($root);
        return $root;
    }

    function greaterTree($root) {
        if (!$root) {
            return;
        }

        $this->greaterTree($root->right);
        $this->sum += $root->val;
        $root->val = $this->sum;

        $this->greaterTree($root->left);
    }
}