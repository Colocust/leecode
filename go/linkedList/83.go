package main

//func deleteDuplicates(head *ListNode) *ListNode {
//	flag := map[int]bool{}
//
//	dummy := new(ListNode)
//	dummy.Next = head
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
