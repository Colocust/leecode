<?php

class Solution
{

	/**
	 * @param String $s
	 * @return String
	 */
	function decodeString (string $s): string
	{
		$stack = [];
		$len = strlen($s);
		for ($i = 0; $i < $len; $i++) {
			if ($s[$i] == ']') {
				$temp = '';
				while (end($stack) != '[') {
					$temp .= array_pop($stack);
				}
				array_pop($stack);

				$num = '';
				while (is_numeric(end($stack))) {
					$num .= array_pop($stack);
				}
				$num = (int)strrev($num);
				while ($num) {
					$tempLen = strlen($temp);
					for ($j = $tempLen - 1; $j >= 0; $j--) {
						array_push($stack, $temp[$j]);
					}
					$num--;
				}

			} else {
				array_push($stack, $s[$i]);
			}
		}
		return implode('', $stack);
	}
}

$solution = new Solution();
var_dump($solution->decodeString('100[leetcode]'));