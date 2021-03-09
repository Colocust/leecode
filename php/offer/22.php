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
	 * @param Integer $k
	 * @return ListNode
	 */
	function getKthFromEnd ($head, $k)
	{
		$fast = $head;
		$slow = $head;

		for ($i = 0; $i < $k; $i++) {
			$fast = $fast->next;
		}

		while ($fast->next != null) {
			$fast = $fast->next;
			$slow = $slow->next;
		}

		return $slow->next;
	}
}