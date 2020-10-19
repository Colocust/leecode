package main

//func removeDuplicateNodes(head *ListNode) *ListNode {
//	dummy := new(ListNode)
//	dummy.Next = head
//
//	flag := make(map[int]bool)
//
//	cur := dummy
//
//	for cur.Next != nil {
//		if _, ok := flag[cur.Next.Val]; ok {
//			cur.Next = cur.Next.Next
//		} else {
//			flag[cur.Next.Val] = true
//			cur = cur.Next
//		}
//	}
//
//	return dummy.Next
//}
//
//type ListNode struct {
//	Val  int
//	Next *ListNode
//}
