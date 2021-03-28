<?php

class Solution
{

	/**
	 * @param Integer[] $digits
	 * @return Integer[]
	 */
	function plusOne ($digits)
	{
		$isTen = true;

		$res = [];
		for ($i = count($digits) - 1; $i >= 0; $i--) {
			$item = $isTen ? $digits[$i] + 1 : $digits[$i];
			$isTen = false;
			if ($item == 10) {
				$item = 0;
				$isTen = true;
			}
			array_unshift($res, $item);
		}
		if ($isTen) {
			array_unshift($res, 1);
		}
		return $res;
	}
}