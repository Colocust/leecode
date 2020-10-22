package main

//func insertionSortList(head *ListNode) *ListNode {
//	if head == nil || head.Next == nil {
//		return head
//	}
//	dummy := new(ListNode)
//	dummy.Next = head
//
//	for head.Next != nil {
//		if head.Val < head.Next.Val {
//			head = head.Next
//		} else {
//			cur := dummy
//			for cur.Next.Val < head.Next.Val {
//				cur = cur.Next
//			}
//
//			next := head.Next
//			head.Next, next.Next, cur.Next = next.Next, cur.Next, next
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
//
//func main() {
//	node1 := &ListNode{Val: 4}
//	node2 := &ListNode{Val: 3}
//	node3 := &ListNode{Val: 2}
//	node4 := &ListNode{Val: 1}
//
//	node1.Next = node2
//	node2.Next = node3
//	node3.Next = node4
//
//	insertionSortList(node1)
//}
