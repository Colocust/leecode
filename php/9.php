<?php

class Solution
{

	/**
	 * @param Integer $x
	 * @return Boolean
	 */
	function isPalindrome ($x)
	{
		if ($x < 0) {
			return false;
		}

		$result = 0;
		$data = $x;

		while ($data) {
			$result = $result * 10 + $data % 10;
			$data = (int)($data / 10);
		}
		return $result == $x;
	}
}

$s = new Solution();
var_dump($s->isPalindrome(121));