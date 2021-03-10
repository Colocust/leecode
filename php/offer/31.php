<?php

class Solution
{

	/**
	 * @param Integer[] $pushed
	 * @param Integer[] $popped
	 * @return Boolean
	 */
	function validateStackSequences ($pushed, $popped)
	{
		$stack = [];
		$index = 0;

		$length = count($pushed);
		for ($i = 0; $i < $length; $i++) {
			$stack[] = $pushed[$i];

			while (!empty($stack) && $stack[count($stack) - 1] == $popped[$index]) {
				array_pop($stack);
				$index++;
			}
		}
		return empty($stack);
	}
}

$s = new Solution();
var_dump($s->validateStackSequences([1, 2, 3, 4, 5], [4, 5, 3, 2, 1]));