<?php

class Solution
{

	/**
	 * @param Integer $numRows
	 * @return Integer[][]
	 */
	function generate ($numRows)
	{
		if ($numRows == 0) {
			return [];
		}
		$result = [
			[1]
		];
		for ($i = 1; $i <= $numRows; $i++) {
			$item = [];
			for ($j = 0; $j <= $i; $j++) {
				if ($j == 0 || $j == $i) {
					$item[] = 1;
				} else {
					$item[] = $result[$i - 1][$j - 1] + $result[$i - 1][$j];
				}
			}
			$result[] = $item;
		}
		return $result;
	}
}