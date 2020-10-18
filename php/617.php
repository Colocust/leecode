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
     * @param TreeNode $t1
     * @param TreeNode $t2
     * @return TreeNode
     */
    function mergeTrees($t1, $t2) {
        if (!$t1 && !$t2) return null;
        if (!$t1) return $t1;
        if (!$t2) return $t2;

        $node = new TreeNode($t1->val + $t2->val);

        $node->left = $this->mergeTrees($t1->left, $t2->left);
        $node->right = $this->mergeTrees($t1->right, $t2->right);

        return $node;
    }
}