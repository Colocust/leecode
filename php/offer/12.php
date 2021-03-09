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
		if (count($board) == 0 || count($board[0]) == 0) {
			return false;
		}

		$next = [];
		foreach ($board as $i => $item) {
			foreach ($item as $j => $v) {
				if ($v == $word[0]) {
					$next[] = [$i, $j];
				}
			}
		}
		if (empty($next)) {
			return false;
		}

		$result = false;
		foreach ($next as $v) {
			$data = $board;
			$data[$v[0]][$v[1]] = false;
			$result = $result || $this->find($data, $v[0], $v[1], substr($word, 1, strlen($word) - 1));
		}
		return $result;
	}

	function find (array $board, int $i, int $j, $word): bool
	{
		if (strlen($word) == 0) {
			return true;
		}

		$next = [];
		if ($i < count($board) - 1 && $board[$i + 1][$j] == $word[0]) {
			$next[] = [$i + 1, $j];
		}
		if ($i > 0 && $board[$i - 1][$j] == $word[0]) {
			$next[] = [$i - 1, $j];
		}
		if ($j < count($board[0]) - 1 && $board[$i][$j + 1] == $word[0]) {
			$next[] = [$i, $j + 1];
		}
		if ($j > 0 && $board[$i][$j - 1] == $word[0]) {
			$next[] = [$i, $j - 1];
		}
		if (count($next) == 0) {
			return false;
		}

		$result = false;
		foreach ($next as $v) {
			$data = $board;
			$data[$v[0]][$v[1]] = false;

			$result = $result || $this->find($data, $v[0], $v[1], substr($word, 1, strlen($word) - 1));
		}
		return $result;
	}
}

$s = new Solution();
var_dump($s->exist([["a", "b"], ["c", "d"]], "abcd"));