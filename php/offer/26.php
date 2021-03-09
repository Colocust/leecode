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
	 * @param TreeNode $A
	 * @param TreeNode $B
	 * @return Boolean
	 */
	function isSubStructure ($A, $B)
	{
		if ($A == null || $B == null) {
			return false;
		}

		return $this->isSub($A, $B) || $this->isSubStructure($A->left, $B) || $this->isSubStructure($A->right, $B);
	}

	function isSub (?TreeNode $a, ?TreeNode $b): bool
	{
		if ($a == null || $a->val != $b->val) {
			return false;
		}
		if ($b == null) {
			return true;
		}

		return $this->isSub($a->left, $b->left) && $this->isSub($a->right, $b->right);
	}
}

$a1 = new TreeNode(1);
$a2 = new TreeNode(2);
$a3 = new TreeNode(3);
$b1 = new TreeNode(3);
$b2 = new TreeNode(1);

$a1->left = $a2;
$a1->right = $a3;

$b1->left = $b2;

$s = new Solution();
var_dump($s->isSubStructure($a1, $b1));