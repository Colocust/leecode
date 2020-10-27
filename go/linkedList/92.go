package main

//func reverseBetween(head *ListNode, m int, n int) *ListNode {
//	dummy := new(ListNode)
//	dummy.Next = head
//
//	cur := dummy
//	for i := 1; i < m; i++ {
//		cur = cur.Next
//	}
//	pre := cur.Next
//	for j := m; j < n; j++ {
//		next := pre.Next
//		pre.Next = next.Next
//		next.Next = cur.Next
//		cur.Next = next
//	}
//
//	return dummy.Next
//}
//
//type ListNode struct {
//	Val  int
//	Next *ListNode
//}
