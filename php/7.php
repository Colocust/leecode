<?php

class Solution
{

	/**
	 * @param Integer $x
	 * @return Integer
	 */
	function reverse ($x)
	{
		$ans = 0;

		while ($x) {
			$ans = $ans * 10 + (int)($x % 10);
			$x = (int)($x / 10);
		}

		if ($ans > (pow(2, 31) - 1) || $ans < (pow(-2, 31) - 1)) {
			return 0;
		}
		return $ans;
	}
}

$s = new Solution();
var_dump($s->reverse(-123));