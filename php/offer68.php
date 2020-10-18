<?php

/**
 * Definition for a binary tree node.
 * struct TreeNode {
 *     int val;
 *     TreeNode *left;
 *     TreeNode *right;
 *     TreeNode(int x) : val(x), left(NULL), right(NULL) {}
 * };
 */;

class Solution {

    function lowestCommonAncestor($root, $p, $q) {
        if (!$root) return null;
        if ($root == $p || $root == $q) return $root;

        $left = $this->lowestCommonAncestor($root->left, $p, $q);
        $right = $this->lowestCommonAncestor($root->right, $p, $q);

        if ($left && $right) return $root;

        return $left ? $left : $right;
    }
}