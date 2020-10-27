package main
//
//func detectCycle(head *ListNode) *ListNode {
//	fast, slow := head, head
//	for fast != nil && fast.Next != nil {
//		slow = slow.Next
//		fast = fast.Next.Next
//
//		if slow == fast {
//			break
//		}
//	}
//	if fast == nil || fast.Next == nil {
//		return nil
//	}
//
//	for slow != head {
//		slow = slow.Next
//		head = head.Next
//	}
//	return slow
//}

//type ListNode struct {
//	Val  int
//	Next *ListNode
//}
