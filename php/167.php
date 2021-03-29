<?php

class Solution
{
//时间复杂度O(n) 空间复杂度O(n) 使用map存储
//	/**
//	 * @param Integer[] $numbers
//	 * @param Integer $target
//	 * @return Integer[]
//	 */
//	function twoSum ($numbers, $target)
//	{
//		$map = [];
//		$length = count($numbers);
//
//		for ($i = 0; $i < $length; $i++) {
//			$map[$numbers[$i]] = $i;
//		}
//
//		for ($j = 0; $j < $length; $j++) {
//			if (isset($map[$target - $numbers[$j]])) {
//				$index = $map[$target - $numbers[$j]];
//				return [++$j, ++$index];
//			}
//		}
//		return [];
//	}

//时间复杂度O(nlogn) 空间复杂度O(1) 二分查找
//	/**
//	 * @param Integer[] $numbers
//	 * @param Integer $target
//	 * @return Integer[]
//	 */
//	function twoSum ($numbers, $target)
//	{
//		$length = count($numbers);
//		for ($i = 0; $i < $length; $i++) {
//			$t = $target - $numbers[$i];
//			$index = $this->search($i + 1, $length - 1, $t, $numbers);
//			if ($index) {
//				return [++$i, ++$index];
//			}
//		}
//		return [];
//	}
//
//	function search (int $start, int $end, int $target, array $numbers): int
//	{
//		if ($start > $end) {
//			return 0;
//		}
//		$middle = (int)(($start + $end) / 2);
//		if ($numbers[$middle] == $target) {
//			return $middle;
//		}
//		if ($numbers[$middle] > $target) {
//			return $this->search($start, $middle - 1, $target, $numbers);
//		} else {
//			return $this->search($middle + 1, $end, $target, $numbers);
//		}
//	}


//时间复杂度O(n) 空间复杂度O(1)
//	/**
//	 * @param Integer[] $numbers
//	 * @param Integer $target
//	 * @return Integer[]
//	 */
//	function twoSum ($numbers, $target)
//	{
//		$left = 0;
//		$right = count($numbers) - 1;
//		while ($left < $right) {
//			$num = $numbers[$left] + $numbers[$right];
//			if ($num == $target) {
//				return [++$left, ++$right];
//			}
//			if ($num > $target) {
//				$right--;
//			} else {
//				$left++;
//			}
//		}
//		return [];
//	}
}