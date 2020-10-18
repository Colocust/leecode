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
     * @return TreeNode
     */
    function mirrorTree($root) {
        if (!$root) return null;

        $left = $root->left;
        $right = $root->right;

        $root->left = $this->mirrorTree($right);
        $root->right = $this->mirrorTree($left);
        return $root;
    }
}