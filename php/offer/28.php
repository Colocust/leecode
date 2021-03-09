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
class Solution
{

	/**
	 * @param TreeNode $root
	 * @return Boolean
	 */
	function isSymmetric ($root)
	{
		return $this->checkIsSymmetric($root->left, $root->right);
	}

	function checkIsSymmetric ($left, $right): bool
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