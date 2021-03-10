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
	 * @return Integer[][]
	 */
	function levelOrder1 ($root)
	{
		$results = [];
		if (is_null($root)) {
			return $results;
		}
		$queue = [$root];

		while (true) {
			$level = [];
			$item = [];
			while (!empty($queue)) {
				$node = array_shift($queue);
				$item[] = $node->val;
				if ($node->left != null) {
					$level[] = $node->left;
				}
				if ($node->right != null) {
					$level[] = $node->right;
				}
			}
			$results[] = $item;
			if (empty($level)) {
				break;
			}
			$queue = $level;
		}

		return $results;
	}

	function levelOrder2 ($root)
	{
		$results = [];
		if (is_null($root)) {
			return $results;
		}
		$queue = [$root];

		while (!empty($queue)) {
			$item = [];

			$length = count($queue);
			for ($i = 0; $i < $length; $i++) {
				$node = array_shift($queue);
				$item[] = $node->val;

				if ($node->left) {
					$queue[] = $node->left;
				}
				if ($node->right) {
					$queue[] = $node->right;
				}
			}

			$results[] = $item;
		}

		return $results;
	}

	function levelOrder3 ($root)
	{
		$results = [];

		$this->dfs($root, 0, $results);

		return $results;
	}

	function dfs ($root, int $index, array &$results)
	{
		if ($root == null) {
			return;
		}

		$results[$index][] = $root->val;

		$this->dfs($root->left, $index + 1, $results);
		$this->dfs($root->right, $index + 1, $results);
	}
}