<?php
/**
 * Definition for a singly-linked list.
 * class ListNode {
 *     public $val = 0;
 *     public $next = null;
 *     function __construct($val) { $this->val = $val; }
 * }
 */

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
     * @param ListNode $head
     * @param TreeNode $root
     * @return Boolean
     */
    function isSubPath($head, $root) {
        if (!$head) return true;
        if (!$root) return false;

        return $this->isSubPath($head, $root->left) || $this->isSubPath($head, $root->right) || $this->dfs($head, $root);
    }

    function dfs($head, $root) {
        if (!$head) return true;
        if (!$root) return false;

        if ($head->val !== $root->val) return false;

        return $this->dfs($head->next, $root->left) || $this->dfs($head->next, $root->right);
    }
}
