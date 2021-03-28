<?php

class Solution
{

	/**
	 * @param String $a
	 * @param String $b
	 * @return String
	 */
	function addBinary ($a, $b)
	{
		$aLength = strlen($a);
		$bLength = strlen($b);

		$res = "";
		$flag = false;

		$i = 0;
		while ($i < $aLength && $i < $bLength) {
			$item = (int)$a[$aLength - $i - 1] + (int)$b[$bLength - $i - 1];
			$item = $flag ? ++$item : $item;
			$flag = false;
			if ($item >= 2) {
				$item -= 2;
				$flag = true;
			}
			$res = (string)$item . $res;
			$i++;
		}

		$string = $i == $bLength ? $a : $b;
		for (; $i < strlen($string); $i++) {
			$item = (int)$string[strlen($string) - $i - 1];
			$item = $flag ? ++$item : $item;
			$flag = false;
			if ($item >= 2) {
				$item -= 2;
				$flag = true;
			}
			$res = (string)$item . $res;
		}

		if ($flag) {
			$res = "1" . $res;
		}

		return $res;
	}
}