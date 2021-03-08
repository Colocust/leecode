<?php

class Solution
{

	/**
	 * @param Integer[] $numbers
	 * @return Integer
	 */
	function minArray ($numbers)
	{
		for ($i = 1; $i < count($numbers); $i++) {
			if ($numbers[$i] < $numbers[$i - 1]) {
				return $numbers[$i];
			}
		}
		return null;
	}
}