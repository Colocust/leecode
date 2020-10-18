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
    private $ans = [];

    /**
     * @param TreeNode $root
     * @return String[]
     */
    function binaryTreePaths($root) {
        $this->binaryTree($root, "");
        return $this->ans;
    }

    function binaryTree($root, $item) {
        $item .= $root->val;
        if (!$root->left && !$root->right) {
            $this->ans[] = $item;
            return;
        }

        $item .= '->';

        if ($root->left) $this->binaryTree($root->left, $item);
        if ($root->right) $this->binaryTree($root->right, $item);
    }
}