<?php

class Solution
{

	/**
	 * @param Integer[] $nums
	 * @return Integer
	 */
	function removeDuplicates (&$nums)
	{
		if (empty($nums)) {
			return 0;
		}
		$length = count($nums);
		$j = 1;
		for ($i = 1; $i < $length; $i++) {
			if ($nums[$i] != $nums[$i - 1]) {
				$nums[$j] = $nums[$i];
				$j++;
			}
		}
		return $j;
	}
}