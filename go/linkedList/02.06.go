package main
//
//func isPalindrome(head *ListNode) bool {
//	fast := head.Next
//	slow := head
//
//	for fast.Next != nil && fast != nil {
//		fast = fast.Next.Next
//		slow = slow.Next
//	}
//	right := slow.Next
//	slow.Next = nil
//	left := head
//
//	var cur *ListNode
//	for right != nil {
//		next := right.Next
//		right.Next = cur
//		cur = right
//		right = next
//	}
//	for cur != nil {
//		if cur.Val != left.Val {
//			return false
//		}
//		cur = cur.Next
//		left = left.Next
//	}
//	return true
//}
//
//type ListNode struct {
//	Val  int
//	Next *ListNode
//}
