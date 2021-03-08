<?php

class Solution
{

	/**
	 * @param Integer $n
	 * @return Integer
	 */
	function fib ($n)
	{
		if ($n == 0) {
			return 0;
		}
		if ($n == 1) {
			return 1;
		}

		$dp0 = 0;
		$dp1 = 1;

		for ($i = 2; $i <= $n; $i++) {
			$dp = ($dp0 + $dp1) % 1000000007;
			$dp0 = $dp1;
			$dp1 = $dp;
		}

		return $dp1;
	}
}