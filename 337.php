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

class TreeNode {
    public $val = null;
    public $left = null;
    public $right = null;

    function __construct($value) {
        $this->val = $value;
    }
}

class Solution {
    /**
     * @param TreeNode $root
     * @return Integer
     */
    function rob($root) {
        return max($this->robTree($root));
    }

    function robTree($root): array {
        $ret = [0, 0];
        if (!$root) return $ret;

        $left = $this->robTree($root->left);
        $right = $this->robTree($root->right);

        $ret[1] = $root->val + $left[0] + $right[0];
        $ret[0] = max($left) + max($right);

        return $ret;
    }
}

$node1 = new TreeNode(3);
$node2 = new TreeNode(4);
$node3 = new TreeNode(5);
$node4 = new TreeNode(1);
$node5 = new TreeNode(3);
$node6 = new TreeNode(1);

$node1->left = $node2;
$node1->right = $node3;
$node2->left = $node4;
$node2->right = $node5;
$node3->right = $node6;

$solution = new Solution();
var_dump($solution->rob($node1));