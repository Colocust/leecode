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
    private $res = null;
    private $k;

    /**
     * @param TreeNode $root
     * @param Integer $k
     * @return Integer
     */
    function kthLargest($root, $k) {
        $this->k = $k;
        $this->dfs($root);
        return $this->res;
    }

    function dfs($root) {
        if (!$root) return;
        $this->dfs($root->right);
        if (--$this->k == 0) $this->res = $root->val;
        $this->dfs($root->left);
    }
}