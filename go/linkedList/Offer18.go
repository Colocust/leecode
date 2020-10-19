package main

//删除节点那么需要找到被删除节点的上一个节点 然用next指向被删除节点的nest
//func deleteNode(head *ListNode, val int) *ListNode {
//	//if head == nil {
//	//	return head
//	//}
//	//head.Next = deleteNode(head.Next, val)
//	//if head.Val == val {
//	//	return head.Next
//	//}
//	//
//	//return head
//
//	node := head
//	if head.Val == val {
//		return node.Next
//	}
//
//	for head.Next != nil {
//		if head.Next.Val == val {
//			head.Next = head.Next.Next
//			break
//		}
//		head = head.Next
//	}
//	return node
//}
//
//type ListNode struct {
//	Val  int
//	Next *ListNode
//}
