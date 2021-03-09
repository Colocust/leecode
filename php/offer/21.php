<?php

class Solution
{

	/**
	 * @param Integer[] $nums
	 * @return Integer[]
	 */
	function exchange ($nums)
	{
		$j = 0;
		for ($i = 0; $i < count($nums); $i++) {
			if ($nums[$i] % 2 == 1) {
				$temp = $nums[$i];
				$nums[$i] = $nums[$j];
				$nums[$j] = $temp;

				$j++;
			}
		}
		return $nums;
	}
}