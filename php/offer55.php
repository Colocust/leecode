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
        if (empty($root)) return 0;

        $height = 0;
        $queue[] = $root;
        while ($queue) {
            $size = count($queue);
            for ($i = 0; $i < $size; $i++) {
                $node = array_shift($queue);
                if (isset($node->left)) $queue[] = $node->left;
                if (isset($node->right)) $queue[] = $node->right;
            }
            $height++;
        }

        return $height;
    }
}
