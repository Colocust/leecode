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
  function inorderTraversal($root) {
    if (!$root) {
      return [];
    }
    $stack = [];

    $left = $this->inorderTraversal($root->left);
    foreach ($left as $vL) {
      $stack[] = $vL;
    }
    $stack[] = $root->val;
    $right = $this->inorderTraversal($root->right);

    foreach ($right as $vR) {
      $stack[] = $vR;
    }
    return $stack;
  }
}
