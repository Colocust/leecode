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
     * @param TreeNode $root1
     * @param TreeNode $root2
     * @return Boolean
     */
    function leafSimilar($root1, $root2) {
        $data1 = $data2 = [];

        $this->dfs($root1, $data1);
        $this->dfs($root2, $data2);

        return $data1 === $data2;
    }

    function dfs($root, array &$data) {
        if (!$root->left && !$root->right) {
            $data[] = $root->val;
        }

        if ($root->left) {
            $this->dfs($root->left, $data);
        }
        if ($root->right) {
            $this->dfs($root->right, $data);
        }
    }
}