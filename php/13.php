<?php

class Solution
{

	/**
	 * @param String $s
	 * @return Integer
	 */
	function romanToInt ($s)
	{
		$map = [
			'I' => 1,
			'V' => 5,
			'X' => 10,
			'L' => 50,
			'C' => 100,
			'D' => 500,
			'M' => 1000
		];

		$case = [
			'I' => [
				'V' => 4,
				'X' => 9
			],
			'X' => [
				'L' => 40,
				'C' => 90
			],
			'C' => [
				'D' => 400,
				'M' => 900
			]
		];

		$ignore = [
			'V', 'L', 'D', 'M'
		];

		$res = 0;
		$len = strlen($s);
		for ($i = 0; $i < $len;) {
			if ($i + 1 == $len || in_array($s[$i], $ignore) || !isset($case[$s[$i]][$s[$i + 1]])) {
				$res += $map[$s[$i]];
				$i++;
			} else {
				$res += $case[$s[$i]][$s[$i + 1]];
				$i += 2;
			}
		}

		return $res;
	}
}