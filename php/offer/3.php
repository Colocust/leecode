<?php

class Solution
{

	/**
	 * @param Integer[] $nums
	 * @return Integer
	 */
	function findRepeatNumber ($nums)
	{
		$map = [];
		foreach ($nums as $v) {
			if (isset($map[$v])) {
				return $v;
			}

			$map[$v] = 1;
		}
		return false;
	}
}