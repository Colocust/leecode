<?php

class Solution
{

	/**
	 * @param Integer $n
	 * @return Integer
	 */
	function cuttingRope ($n)
	{
		$dp[1] = 1;

		for ($i = 2; $i <= $n; $i++) {
			$dp[$i] = 0;
			for ($j = 1; $j < $i; $j++) {
				$dp[$i] = max($dp[$i], ($j * ($i - $j) % 1000000007), ($dp[$i - $j] * $j) % 1000000007);
			}
		}
		return $dp[$n];
	}
}