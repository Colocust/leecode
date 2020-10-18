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
     * @param Integer[] $nums
     * @return TreeNode
     */
    function sortedArrayToBST($nums) {
        return $this->insert($nums, 0, count($nums) - 1);
    }

    function insert(array $nums, int $left, int $right) {
        if ($left > $right) {
            return null;
        }

        $middle = (int)(($left + $right) / 2);
        $node = new TreeNode($nums[$middle]);

        $node->left = $this->insert($nums, $left, $middle - 1);
        $node->right = $this->insert($nums, $middle + 1, $right);

        return $node;
    }

}