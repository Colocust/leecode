<?php

class Solution
{

	/**
	 * @param Integer $n
	 * @return Integer[]
	 */
	function printNumbers ($n)
	{
		$max = pow(10, $n) - 1;

		$res = [];
		for ($r = 1; $r <= $max; $r++) {
			$res[] = $r;
		}
		return $res;
	}
}