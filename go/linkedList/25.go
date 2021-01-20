package main

/**
 * Definition for singly-linked list.
 * type ListNode struct {
 *     Val int
 *     Next *ListNode
 * }
 */
func reverseKGroup(head *ListNode, k int) *ListNode {
	dummy := new(ListNode)
	dummy.Next = head
	pre := dummy

	for head != nil {
		tail := pre
		for i := 0; i < k; i++ {
			tail = tail.Next
			if tail == nil {
				return dummy.Next
			}
		}

		next := tail.Next
		reverse(head, tail)

		pre.Next, pre, head = tail, head, next
	}
	return dummy.Next
}

func reverse(head, tail *ListNode) {
	node := tail.Next
	for node != tail {
		next := head.Next
		head.Next, node, head = node, head, next
	}
}
