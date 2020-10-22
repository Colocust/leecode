package main

//type ListNode struct {
//	Val  int
//	Next *ListNode
//}
//
//func partition(head *ListNode, x int) *ListNode {
//	if head == nil || head.Next == nil {
//		return head
//	}
//
//	cur, pre := head, head
//
//	for cur != nil {
//		if cur.Val < x {
//			cur.Val, pre.Val, pre = pre.Val, cur.Val, pre.Next
//		}
//		cur = cur.Next
//	}
//
//	return head
//}
