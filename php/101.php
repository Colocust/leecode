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
class Solution
{

	/**
	 * @param TreeNode $root
	 * @return Boolean
	 */
	function isSymmetric ($root)
	{
		if (is_null($root)) {
			return true;
		}
		return $this->checkIsSymmetric($root->left, $root->right);
	}

	function checkIsSymmetric (?TreeNode $left, ?TreeNode $right): bool
	{
		if ($left == null && $right == null) {
			return true;
		}
		if ($left == null || $right == null || $left->val != $right->val) {
			return false;
		}
		return $this->checkIsSymmetric($left->left, $right->right) && $this->checkIsSymmetric($left->right, $right->left);
	}
}