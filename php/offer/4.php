<?php


class TreeNode
{
	var $val;
	var $left = NULL;
	var $right = NULL;

	function __construct ($val)
	{
		$this->val = $val;
	}
}

/**
 * 代码中的类名、方法名、参数名已经指定，请勿修改，直接返回方法规定的值即可
 *
 * @param pre int整型一维数组
 * @param vin int整型一维数组
 * @return TreeNode类
 */
function reConstructBinaryTree ($pre, $vin): ?TreeNode
{
	if (count($pre) == 0 || count($vin) == 0) {
		return null;
	}

	$node = new TreeNode($pre[0]);
	if (count($pre) == 1) {
		return $node;
	}

	for ($i = 0; $i < count($vin); $i++) {
		if ($vin[$i] == $pre[0]) {
			break;
		}
	}

	$node->left = reConstructBinaryTree(array_slice($pre, 1, $i), array_slice($vin, 0, $i));
	$node->right = reConstructBinaryTree(array_slice($pre, $i + 1, count($pre) - $i),
		array_slice($vin, $i + 1, count($pre) - $i));

	return $node;
}

var_dump(reConstructBinaryTree([1, 2, 3, 4, 5, 6, 7], [3, 2, 4, 1, 6, 5, 7]));