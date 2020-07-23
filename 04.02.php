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
   * @param Integer[] $nums
   * @return TreeNode
   */
  function sortedArrayToBST($nums) {
    //二分查找 递归左右 中间数生成根节点
    if (empty($nums)) {
      return null;
    }
    $middle = (int)(count($nums) / 2);
    $node = new TreeNode($nums[$middle]);

    $left = [];
    for ($i = 0; $i < $middle; $i++) {
      $left[] = $nums[$i];
    }
    $right = [];
    for ($i = $middle + 1; $i < count($nums); $i++) {
      $right[] = $nums[$i];
    }
    $node->left = $this->sortedArrayToBST($left);
    $node->right = $this->sortedArrayToBST($right);
    return $node;
  }
}

$solution = new Solution();
var_dump($solution->sortedArrayToBST([-10, -3, 5, 9]));
