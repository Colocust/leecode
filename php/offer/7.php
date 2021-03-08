<?php

class TreeNode
{
	public $val = null;
	public $left = null;
	public $right = null;

	function __construct ($value)
	{
		$this->val = $value;
	}
}

class Solution
{

	/**
	 * @param Integer[] $preorder
	 * @param Integer[] $inorder
	 * @return TreeNode
	 */
	function buildTree ($preorder, $inorder)
	{
		$length = count($preorder);
		if ($length == 0) {
			return null;
		}

		for ($i = 0; $i < $length; $i++) {
			if ($inorder[$i] == $preorder[0]) {
				break;
			}
		}
		$node = new TreeNode($preorder[0]);
		$node->left = $this->buildTree(array_slice($preorder, 1, $i), array_slice($inorder, 0, $i));
		$node->right = $this->buildTree(array_slice($preorder, $i + 1, $length - $i),
			array_slice($inorder, $i + 1, $length - $i));
		return $node;
	}
}
