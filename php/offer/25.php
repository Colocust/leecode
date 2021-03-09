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
	 * @param ListNode $l1
	 * @param ListNode $l2
	 * @return ListNode
	 */
	function mergeTwoLists ($l1, $l2)
	{
		$l = new ListNode(null);
		$cur = $l;

		while ($l1 != null && $l2 != null) {
			if ($l1->val < $l2->val) {
				$cur->next = $l1;
				$l1 = $l1->next;
			} else {
				$cur->next = $l2;
				$l2 = $l2->next;
			}
			$cur = $cur->next;
		}
		if ($l1) {
			$cur->next = $l1;
		}
		if ($l2) {
			$cur->next = $l2;
		}

		return $l->next;
	}
}