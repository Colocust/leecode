<?php

/**
 * Definition for a binary tree node.
 * class TreeNode {
 *     public $val = null;
 *     public $left = null;
 *     public $right = null;
 *     function __construct($val = 0, $left = null, $right = null) {
 *         $this->val = $val;
 *         $this->left = $left;
 *         $this->right = $right;
 *     }
 * }
 */
class Solution {

    /**
     * @param TreeNode $p
     * @param TreeNode $q
     * @return Boolean
     */
    function isSameTree($p, $q) {
//        $data1 = $data2 = [];
//        $this->preOrder($p, $data1);
//        $this->preOrder($q, $data2);
//
//        return $data1 === $data2;
        if (!$p && !$q) return true;

        if ($p && $q && $p->val == $q->val) {
            return $this->isSameTree($p->left, $q->left) && $this->isSameTree($p->right, $q->right);
        }

        return false;
    }

    function preOrder($p, &$data) {
        if (!$p) {
            $data[] = null;
            return;
        }
        $data[] = $p->val;
        $this->preOrder($p->left, $data);
        $this->preOrder($p->right, $data);
    }
}