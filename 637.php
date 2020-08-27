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
     * @return Float[]
     */
    function averageOfLevels($root) {
        $ans = [];
        $queue = new SplQueue();
        $queue->enqueue($root);

        while (!$queue->isEmpty()) {
            $size = $queue->count();

            $sum = 0;
            for ($i = 0; $i < $size; $i++) {
                $node = $queue->dequeue();
                $sum += $node->val;

                if($node->left) $queue->enqueue($node->left);
                if($node->right) $queue->enqueue($node->right);
            }

            $ans[] = $sum / $size;
        }

        return $ans;
    }
}