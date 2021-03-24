<?php

class Solution
{

	/**
	 * @param Integer[] $height
	 * @return Integer
	 */
	function maxArea ($height)
	{
		$left = 1;
		$right = count($height) - 1;

		$result = 0;
		while ($left < $right) {
			$result = max($result, ($right - $left) * min($height[$right], $height[$left]));

			if ($height[$right] > $height[$left]) {
				++$left;
			} else {
				--$right;
			}
		}
		return $result;
	}
}