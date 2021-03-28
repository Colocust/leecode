<?php

class Solution
{

	/**
	 * @param String $haystack
	 * @param String $needle
	 * @return Integer
	 */
	function strStr ($haystack, $needle)
	{
		if (empty($needle)) {
			return 0;
		}

		$hLength = strlen($haystack);
		$nLength = strlen($needle);
		for ($i = 0; $i < $hLength - $nLength + 1; $i++) {
			$s = substr($haystack, $i, $nLength);
			if ($s == $needle) {
				return $i;
			}
		}
		return -1;
	}
}