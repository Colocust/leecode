<?php

class Solution
{

	/**
	 * @param Integer[][] $intervals
	 * @return Integer[][]
	 */
	function merge ($intervals)
	{
		if (empty($intervals)) {
			return [[]];
		}
		$results = [];
		usort($intervals, [$this, 'sort']);

		$length = count($intervals);

		for ($i = 0; $i < $length;) {
			$item = $intervals[$i];

			for ($j = $i + 1; $j < $length; $j++) {
				if ($item[1] < $intervals[$j][0]) {
					break;
				}
				$item[1] = max($item[1], $intervals[$j][1]);
			}
			$i = $j;
			$results[] = $item;
		}

		return $results;
	}

	function sort (array $a, array $b)
	{
		if ($a[0] > $b[0]) {
			return 1;
		} else if ($a[0] == $b[0]) {
			if ($a[1] > $b[1]) {
				return 1;
			}
			return -1;
		}
		return -1;
	}
}

$s = new Solution();
var_dump($s->merge([[1, 2], [1, 3], [2, 3], [1, 0]]));