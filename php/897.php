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
     * @return TreeNode
     */
    function increasingBST($root) {
        $this->getNodeVal($root);
        $node = new ListNode(null);
        $cur = $node;
        foreach ($this->data as $value) {
            $cur->right = new ListNode($value);
            $cur = $cur->right;
        }
        return $node->right;
    }

    function getNodeVal($root): void {
        if (!$root) return;
        $this->getNodeVal($root->left);
        $this->data[] = $root->val;
        $this->getNodeVal($root->right);
    }

}