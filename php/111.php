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
	 * @return Integer
	 */
	function minDepth ($root)
	{
		if ($root == null) {
			return 0;
		}
		$lHeight = $this->minDepth($root->left);
		$rHeight = $this->minDepth($root->right);

		if($lHeight == 0 && $rHeight == 0) {
			return 1;
		}
		if ($lHeight == 0 || $rHeight == 0) {
			$height = $lHeight == 0 ? $rHeight : $lHeight;
			return ++$height;
		}
		return min($lHeight,$rHeight) + 1;
	}
}