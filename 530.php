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
    private $data = [];

    /**
     * @param TreeNode $root
     * @return Integer
     */
    function getMinimumDifference($root) {
        $this->inOrder($root);

        $min = PHP_INT_MAX;

        $pre = $this->data[0];
        $length = count($this->data);
        for ($i = 1; $i < $length; $i++) {
            $cur = $this->data[$i];
            $min = min($min, $cur - $pre);

            $pre = $cur;
        }
        return $min;
    }

    function inOrder($root) {
        if (!$root) return;

        $this->inOrder($root->left);
        $this->data[] = $root->val;
        $this->inOrder($root->right);
    }
}