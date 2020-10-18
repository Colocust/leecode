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
    private $isBalance = true;

    /**
     * @param TreeNode $root
     * @return Boolean
     */
    function isBalanced($root) {
        $this->getDepth($root);

        return $this->isBalance;
    }


    function getDepth($root) {
        if (!$root) return 0;


        $left = $this->getDepth($root->left);
        $right = $this->getDepth($root->right);

        if (abs($left - $right) > 1) {
            $this->isBalance = false;
            return 0;
        }

        return max($left, $right) + 1;
    }
}