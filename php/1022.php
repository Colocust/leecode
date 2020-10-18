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
    private $sum = 0;

    /**
     * @param TreeNode $root
     * @return Integer
     */
    function sumRootToLeaf($root) {
        if (empty($root)) return 0;

        $this->sum($root, 0);

        return $this->sum % (1000000000 + 7);
    }

    function sum($root, $n) {
        if ($root) {
            $n = $n * 2 + $root->val;
            if (!$root->left && !$root->right) {
                $this->sum += $n;
                return;
            }

            if ($root->left) $this->sum($root->left, $n);
            if ($root->right) $this->sum($root->right, $n);
        }
        return;
    }
}