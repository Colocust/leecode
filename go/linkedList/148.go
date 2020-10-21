package main
//
//func sortList(head *ListNode) *ListNode {
//	if head == nil || head.Next == nil {
//		return head
//	}
//
//	fast, slow := head, head
//	fast = fast.Next
//	for fast != nil && fast.Next != nil {
//		fast = fast.Next.Next
//		slow = slow.Next
//	}
//
//	next := slow.Next
//	slow.Next = nil
//	left := sortList(head)
//	right := sortList(next)
//	return merge2LinkedList(left, right)
//}
//
//func merge2LinkedList(l1, l2 *ListNode) *ListNode {
//	if l1 == nil {
//		return l2
//	}
//	if l2 == nil {
//		return l1
//	}
//	if l1.Val > l2.Val {
//		l2.Next = merge2LinkedList(l1, l2.Next)
//		return l2
//	} else {
//		l1.Next = merge2LinkedList(l1.Next, l2)
//		return l1
//	}
//}
//
//type ListNode struct {
//	Val  int
//	Next *ListNode
//}
