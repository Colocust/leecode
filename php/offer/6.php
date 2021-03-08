<?php

/**
 * Definition for a singly-linked list.
 * class ListNode {
 *     public $val = 0;
 *     public $next = null;
 *     function __construct($val) { $this->val = $val; }
 * }
 */
class Solution
{

	/**
	 * @param ListNode $head
	 * @return Integer[]
	 */
	function reversePrint ($head)
	{
		if ($head == null) {
			return [];
		}

		$cur = null;
		while ($head != null) {
			$next = $head->next;
			$head->next = $cur;
			$cur = $head;
			$head = $next;
		}

		$results = [];
		while ($cur != null) {
			$results[] = $cur->val;
			$cur = $cur->next;
		}
		return $results;
	}
}