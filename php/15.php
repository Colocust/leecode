<?php

class Solution
{

	/**
	 * @param Integer[] $nums
	 * @return Integer[][]
	 */
	function threeSum ($nums)
	{
		if (empty($nums) || count($nums) < 3) {
			return [];
		}
		sort($nums); //O(logn)

		$result = [];

		$length = count($nums);
		for ($i = 0; $i < $length - 2; $i++) { //O(n2)
			if ($nums[$i] > 0) {
				return $result;
			}
			if ($i > 0 && $nums[$i] == $nums[$i - 1]) {
				continue;
			}
			$target = -$nums[$i];
			$left = $i + 1;
			$right = $length - 1;
			while ($left < $right) {
				$number = $nums[$left] + $nums[$right];
				if ($number == $target) {
					$result[] = [$nums[$i], $nums[$left], $nums[$right]];
					$left++;
					$right--;
					while ($left < $right && $nums[$left] == $nums[$left - 1]) {
						$left++;
					}
					while ($left < $right && $nums[$right] == $nums[$right + 1]) {
						$right--;
					}
				} else if ($number < $target) {
					$left++;
				} else {
					$right--;
				}
			}
		}

		return $result;
	}
}

$s = new Solution();
var_dump($s->threeSum([-1, 0, 1, 2, -1, -4]));