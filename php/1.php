<?php

class Solution
{

	/**
	 * @param Integer[] $nums
	 * @param Integer $target
	 * @return Integer[]
	 */
	function twoSum ($nums, $target)
	{
		$map = [];
		foreach ($nums as $k => $v) {
			$map[$v] = $k;
		}

		$ret = [];
		for ($i = 0; $i < count($nums); $i++) {
			$t = $target - $nums[$i];
			if (isset($map[$t]) && $map[$t] != $i) {
				$ret = [$i, $map[$target - $nums[$i]]];
				break;
			}
		}

		return $ret;
	}
}

$solution = new Solution();
var_dump($solution->twoSum([3, 2, 4], 6));