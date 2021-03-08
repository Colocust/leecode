<?php

class Solution
{

	/**
	 * @param Integer $n
	 * @return Integer
	 */
	function numWays ($n)
	{
		if ($n == 0) {
			return 1;
		}
		if ($n < 3) {
			return $n;
		}
		$dp[1] = 1;
		$dp[2] = 2;
		for ($i = 3; $i <= $n; $i++) {
			$dp[$i] = ($dp[$i - 1] + $dp[$i - 2]) % 1000000007;
		}
		return $dp[$n];
	}
}

$s = new Solution();
var_dump($s->numWays(4));