<?php

class Solution
{

	/**
	 * @param Integer[] $nums
	 * @param Integer $target
	 * @return Integer
	 */
	function searchInsert ($nums, $target)
	{
		if (empty($nums)) {
			return 0;
		}
		return $this->find(0, count($nums) - 1, $nums, $target);
	}

	function find ($left, $right, $data, $target): int
	{
		if ($left > $right) {
			return $left;
		}
		$middle = (int)(($left + $right) / 2);
		if ($data[$middle] == $target) {
			return $middle;
		}
		if ($data[$middle] < $target) {
			return $this->find($middle + 1, $right, $data, $target);
		}
		return $this->find($left, $middle - 1, $data, $target);
	}
}