<?php

class Solution
{

	/**
	 * @param String[] $strs
	 * @return String
	 */
	function longestCommonPrefix ($strs)
	{
		if (empty($strs)) {
			return "";
		}
		if (count($strs) == 1) {
			return $strs[0];
		}
		$result = '';
		for ($i = 0; $i < strlen($strs[0]); $i++) {
			for ($j = 1; $j < count($strs); $j++) {
				if ($strs[0][$i] != $strs[$j][$i]) {
					return $result;
				}
			}
			$result .= $strs[0][$i];
		}

		return $result;
	}

}