<?php

class Solution
{

	/**
	 * @param Integer[][] $matrix
	 * @param Integer $target
	 * @return Boolean
	 */
	function findNumberIn2DArray ($matrix, $target)
	{
		if (count($matrix) == 0) {
			return false;
		}
		$length = count($matrix[0]);
		if ($length == 0) {
			return false;
		}

		foreach ($matrix as $item) {
			if ($item[0] > $target || $item[$length - 1] < $target) {
				continue;
			}

			if ($this->find($item, $target, 0, $length - 1)) {
				return true;
			}
		}
		return false;
	}

	private function find (array $data, int $target, int $start, int $end): bool
	{
		if ($start > $end) {
			return false;
		}

		$middle = (int)(($start + $end) / 2);

		if ($data[$middle] == $target) {
			return true;
		}
		if ($data[$middle] > $target) {
			return $this->find($data, $target, $start, $middle - 1);
		}
		return $this->find($data, $target, $middle + 1, $end);
	}
}

$s = new Solution();
var_dump($s->findNumberIn2DArray([
	[1, 4, 7, 11, 15],
	[2, 5, 8, 12, 19],
	[3, 6, 9, 16, 22],
	[10, 13, 14, 17, 24],
	[18, 21, 23, 26, 30]
], 5));