<?php

class Solution
{

	/**
	 * @param Integer $rowIndex
	 * @return Integer[]
	 */
	function getRow ($rowIndex)
	{
		if ($rowIndex == 0) {
			return [];
		}
		$result = [
			1
		];

		for ($i = 0; $i < $rowIndex; $i++) {
			$item = [];
			for ($j = 0; $j <= $i; $j++) {
				if ($j == 0 || $j == $i) {
					$item[] = 1;
				} else {
					$item[] = $result[$j - 1] + $result[$j];
				}
			}
			$result = $item;
		}

		return $result;
	}
}