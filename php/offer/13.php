<?php

class Solution
{

	/**
	 * @param Integer $m
	 * @param Integer $n
	 * @param Integer $k
	 * @return Integer
	 */
	function movingCount ($m, $n, $k)
	{
		$results = [];
		return $this->find($m, $n, 0, 0, $k, $results);
	}

	function find (int $m, int $n, int $i, int $j, int $k, array &$results): int
	{
		if ($i < 0 || $j < 0 || $i == $m || $j == $n || isset($results[$i][$j]) || !$this->checkIsRightMoving($i, $j, $k)) {
			return 0;
		}

		$results[$i][$j] = true;
		return $this->find($m, $n, $i + 1, $j, $k, $results) +
			$this->find($m, $n, $i - 1, $j, $k, $results) +
			$this->find($m, $n, $i, $j + 1, $k, $results) +
			$this->find($m, $n, $i, $j - 1, $k, $results) + 1;
	}

	function checkIsRightMoving (int $i, int $j, int $k): int
	{
		$sumI = (int)($i / 100) + (int)(($i % 100) / 10) + (int)(($i % 10) / 1);
		$sumJ = (int)($j / 100) + (int)(($j % 100) / 10) + (int)(($j % 10) / 1);

		return $sumI + $sumJ <= $k ? 1 : 0;
	}
}

$s = new Solution();
var_dump($s->movingCount(16, 8, 4));