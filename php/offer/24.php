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
	 * @return ListNode
	 */
	function reverseList ($head)
	{
		$cur = null;
		while ($head != null) {
			$next = $head->next;
			$head->next = $cur;
			$cur = $head;
			$head = $next;
		}
		return $cur;
	}
}