<?php

class Solution
{

	/**
	 * @param String $s
	 * @return Integer
	 */
	function lengthOfLongestSubstring ($s)
	{
		$ret = 0;

		for ($i = 0; $i < strlen($s); $i++) {
			$item = [];
			$item[$s[$i]] = true;

			for ($j = $i + 1; $j < strlen($s); $j++) {
				if (isset($item[$s[$j]])) {
					break;
				}
				$item[$s[$j]] = true;
			}
			$ret = max($ret, $j - $i);
		}

		return $ret;
	}
}

$str = 'pwwkew';
$solution = new Solution();
var_dump($solution->lengthOfLongestSubstring($str));