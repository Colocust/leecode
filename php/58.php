<?php

class Solution
{

	/**
	 * @param String $s
	 * @return Integer
	 */
	function lengthOfLastWord ($s)
	{
		$result = 0;
		for ($i = 0; $i < strlen($s);) {
			$length = 0;
			while ($i < strlen($s) && $s[$i] != " ") {
				$i++;
				$length++;
			}
			$result = $length == 0 ? $result : $length;
			$i++;
		}
		return $result;
	}
}

$s = new Solution();
var_dump($s->lengthOfLastWord("Hello World"));