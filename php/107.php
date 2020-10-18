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
     * @return Integer[][]
     */
    function levelOrderBottom($root) {
        if (empty($root)) return [];
        $queue[] = $root;
        $ans = [];

        while ($queue) {
            $size = count($queue);
            $item = [];

            for ($i = 0; $i < $size; $i++) {
                $shift = array_shift($queue);
                $item[] = $shift->val;

                if ($shift->left) $queue[] = $shift->left;
                if ($shift->right) $queue[] = $shift->right;
            }

            array_unshift($ans, $item);
        }
        return $ans;
    }
}