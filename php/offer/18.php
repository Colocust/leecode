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
	 * @param Integer $val
	 * @return ListNode
	 */
	function deleteNode ($head, $val)
	{
		$dummy = new ListNode(null);
		$dummy->next = $head;

		$current = $dummy;
		while ($current->next->val != $val) {
			$current = $current->next;
		}

		$current->next = $current->next->next;

		return $dummy->next;
	}
}