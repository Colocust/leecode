package main

//func hasCycle(head *ListNode) bool {
//	//flag := make(map[*ListNode]bool)
//	//
//	//for head != nil {
//	//	if _, ok := flag[head]; ok {
//	//		return true
//	//	}
//	//	flag[head] = true
//	//	head = head.Next
//	//}
//	//return false
//
//	fast, slow := head, head
//
//	for fast != nil && slow != nil && fast.Next != nil {
//		fast = fast.Next.Next
//		slow = slow.Next
//
//		if fast == slow {
//			return true
//		}
//	}
//	return false
//}
//
//type ListNode struct {
//	Val  int
//	Next *ListNode
//}
