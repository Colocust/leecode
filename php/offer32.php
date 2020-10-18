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
    function levelOrder($root) {
//        if (empty($root)) return [];
//
//        $return = [];
//        $queue[] = $root;
//        while ($queue) {
//            $length = count($queue);
//
//            $item = [];
//            for ($i = 0; $i < $length; $i++) {
//                $shift = array_shift($queue);
//                $item[] = $shift->val;
//
//                if(isset($shift->left)) $queue[] = $shift->left;
//                if(isset($shift->right)) $queue[] = $shift->right;
//            }
//
//            $return[] = $item;
//        }
//
//        return $return;
        if (empty($root)) return [];
        $ans = [];
        $index = 0;
        $this->dfs($root, $index, $ans);
        return $ans;
    }

    function dfs($root, $index, &$ans) {
        if (empty($root)) return null;
        $ans[$index][] = $root->val;

        $index += 1;
        $this->dfs($root->left, $index, $ans);
        $this->dfs($root->right, $index, $ans);
    }
}