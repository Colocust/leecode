package main

//type ListNode struct {
//	Val  int
//	Next *ListNode
//}
//
//func kthToLast(head *ListNode, k int) int {
//	fast := head
//	slow := head
//
//	for i := 0; i < k; i++ {
//		fast = fast.Next
//	}
//
//	for {
//		if fast == nil {
//			break
//		}
//
//		fast = fast.Next
//		slow = slow.Next
//	}
//	return slow.Val
//}
