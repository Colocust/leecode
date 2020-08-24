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
     * @return Integer
     */
    function maxDepth($root) {
        if (!$root) return 0;

//        方法1递归
//        return 1 + max($this->maxDepth($root->left), $this->maxDepth($root->right));
//        方法2层序
        $queue[] = $root;
        $height = 0;
        while ($queue) {
            $size = count($queue);
            $height++;
            for ($i = 0; $i < $size; $i++) {
                $node = array_shift($queue);
                if (isset($node->left)) $queue[] = $node->left;
                if (isset($node->right)) $queue[] = $node->right;
            }
        }

        return $height;
    }
}