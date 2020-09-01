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
     * @return Boolean
     */
    function isSymmetric($root) {
        return $root ? $this->recur($root->left, $root->right) : true;
    }

    function recur($L, $R): bool {
        if (!$L && !$R) {
            return true;
        }

        if (!$L || !$R || $L->val !== $R->val) {
            return false;
        }

        return $this->recur($L->left, $R->right) && $this->recur($L->right, $R->left);
    }
}