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
	 * @return Integer[]
	 */
	function levelOrder ($root)
	{
		$results = [];
		$queue = [$root];
		while (!empty($queue)) {
			$node = array_shift($queue);
			$results[] = $node->val;

			if ($node->left != null) {
				$queue[] = $node->left;
			}
			if ($node->right != null) {
				$queue[] = $node->right;
			}
		}
		return $results;
	}
}