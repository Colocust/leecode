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
     * @param Integer $val
     * @return TreeNode
     */
    function searchBST($root, $val) {
//        if (!$root) return null;
//        if ($root->val == $val) return $root;
//        if ($root->val > $val) return $this->searchBST($root->left, $val);
//
//        return $this->searchBST($root->right, $val);

        while ($root && $root->val !== $val) {
            if ($root->val > $val) $root = $root->left;
            else $root = $root->right;
        }
        return $root;
    }
}