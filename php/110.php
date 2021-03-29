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
	function isBalanced ($root)
	{
		return $this->height($root) > -1;
	}

	function height (?TreeNode $node)
	{
		if ($node == null) {
			return 0;
		}

		$lHeight = 1 + $this->height($node->left);
		$rHeight = 1 + $this->height($node->right);

		if ($lHeight > -1 && $rHeight > -1 && abs($lHeight - $rHeight) <= 1) {
			return 1 + max($lHeight, $rHeight);
		}
		return -1;
	}
}