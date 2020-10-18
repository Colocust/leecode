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
     * @return TreeNode
     */
    function convertBiNode($root) {
        $data = [];
        $this->inorder($root, $data);

        $node = new TreeNode(null);

        $result = $node;
        $length = count($data);
        $key = 0;
        while ($key < $length) {
            $current = new TreeNode($data[$key]);
            $node->right = $current;
            $node = $current;
            $key++;
        }

        return $result->right;
    }

    function inorder($root, &$data) {
        if (!$root) return;

        $this->inorder($root->left, $data);
        $data[] = $root->val;
        $this->inorder($root->right, $data);
    }
}