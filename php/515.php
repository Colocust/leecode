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
     * @return Integer[]
     */
    function largestValues($root) {
        $res = [];
        $queue = [];

        if (!$root) {
            return $res;
        }

        $queue[] = $root;
        while ($queue) {
            $size = count($queue);

            $max = -PHP_INT_MAX;
            for ($i = 0; $i < $size; $i++) {
                $shift = array_shift($queue);
                if ($shift->val > $max) {
                    $max = $shift->val;
                }
                if ($shift->left) {
                    $queue[] = $shift->left;
                }
                if ($shift->right) {
                    $queue[] = $shift->right;
                }
            }

            $res[] = $max;
        }
        return $res;
    }
}