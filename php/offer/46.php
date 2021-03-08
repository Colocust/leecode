<?php


/**
 * 代码中的类名、方法名、参数名已经指定，请勿修改，直接返回方法规定的值即可
 *
 * @param n int整型
 * @param m int整型
 * @return int整型
 */
function LastRemaining_Solution ($n, $m): int
{
	$data = [];

	for ($i = 0; $i < $n; $i++) {
		$data[] = $i;
	}

	$index = 0;
	do {
		if (count($data) == 1) {
			return current($data);
		}

		if (($index + 1) % $m != 0) {
			$data[] = $data[$index];
		}
		unset($data[$index]);
		$index++;
	} while (true);
}

echo LastRemaining_Solution(5, 3);