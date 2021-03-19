<?php

class Solution
{

	/**
	 * @param Integer[][] $costs
	 * @return Integer
	 */
	function twoCitySchedCost ($costs)
	{
		if (empty($costs)) {
			return 0;
		}
		$sum = 0;

		usort($costs, [$this, 'sort']);

		$middle = (count($costs) / 2) - 1;
		for ($i = 0; $i < count($costs); $i++) {
			if ($i <= $middle) {
				$sum += $costs[$i][0];
			} else {
				$sum += $costs[$i][1];
			}
		}

		return $sum;
	}

	function sort (array $i, array $j)
	{
		if ($i[0] - $i[1] < $j[0] - $j[1]) {
			return -1;
		}
		return 1;
	}
}

$s = new Solution();
var_dump($s->twoCitySchedCost([
	[10, 20], [40, 70], [30, 200], [400, 50]
]));