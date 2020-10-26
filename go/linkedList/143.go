package main
//
//func reorderList(head *ListNode) {
//	if head == nil || head.Next == nil {
//		return
//	}
//	fast, slow := head.Next, head
//	for fast != nil && fast.Next != nil {
//		fast = fast.Next.Next
//		slow = slow.Next
//	}
//	left, right := head, slow.Next
//	slow.Next = nil
//
//	var cur *ListNode
//	for right != nil {
//		next := right.Next
//		right.Next = cur
//		cur = right
//		right = next
//	}
//	i := 1
//	dummy := new(ListNode)
//	pre := dummy
//	for left != nil && cur != nil {
//		if i%2 == 1 {
//			pre.Next = left
//			left = left.Next
//		} else {
//			pre.Next = cur
//			cur = cur.Next
//		}
//		pre = pre.Next
//		i++
//	}
//
//	if left != nil {
//		pre.Next = left
//	}
//	if cur != nil {
//		pre.Next = cur
//	}
//	head = dummy.Next
//}
//
//type ListNode struct {
//	Val  int
//	Next *ListNode
//}
