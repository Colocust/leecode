package main

func deleteDuplicates(head *ListNode) *ListNode {
	if head == nil || head.Next == nil {
		return head
	}

	next := head.Next
	if next.Val == head.Val {
		for next != nil && head.Val == next.Val {
			next = next.Next
		}
		head = deleteDuplicates(next)
	} else {
		head.Next = deleteDuplicates(next)
	}
	return head
}

type ListNode struct {
	Val  int
	Next *ListNode
}
