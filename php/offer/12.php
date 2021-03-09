<?php

class Solution
{

	/**
	 * @param String[][] $board
	 * @param String $word
	 * @return Boolean
	 */
	function exist ($board, $word)
	{
		if (strlen($word) == 0) {
			return true;
		}
		if (empty($word)) {
			return false;
		}

		if (count($board) * count($board[0]) < strlen($word)) {
			return false;
		}

		for ($i = 0; $i < count($board); $i++) {
			for ($j = 0; $j < count($board[0]); $j++) {
				if ($this->findPath($board, $word, 0, $i, $j)) {
					return true;
				}
			}
		}

		return false;
	}

	function findPath (array $board, string $word, int $index, int $i, int $j): bool
	{
		if ($index == strlen($word)) {
			return true;
		}
		if ($i < 0 || $j < 0 || $i == count($board) || $j == count($board[0])) {
			return false;
		}
		if ($board[$i][$j] != $word[$index]) {
			return false;
		}
		$board[$i][$j] = " ";

		$index++;
		if ($this->findPath($board, $word, $index, $i - 1, $j)) {
			return true;
		}
		if ($this->findPath($board, $word, $index, $i + 1, $j)) {
			return true;
		}
		if ($this->findPath($board, $word, $index, $i, $j - 1)) {
			return true;
		}
		if ($this->findPath($board, $word, $index, $i, $j + 1)) {
			return true;
		}
		return false;
	}
}

$s = new Solution();
var_dump($s->exist([["a"]], "a"));