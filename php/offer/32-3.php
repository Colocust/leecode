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
	function levelOrder ($root)
	{
		$results = [];
		if ($root == null) {
			return $results;
		}
		$queue = [$root];

		$index = 0;
		while (!empty($queue)) {
			$length = count($queue);
			$item = [];
			for ($i = 0; $i < $length; $i++) {
				$shift = array_shift($queue);

				if ($index % 2 == 0) {
					$item[] = $shift->val;
				} else {
					array_unshift($item, $shift->val);
				}
				if ($shift->left) {
					$queue[] = $shift->left;
				}
				if ($shift->right) {
					$queue[] = $shift->right;
				}
			}
			$results[] = $item;
			$index++;
		}

		return $results;
	}

}