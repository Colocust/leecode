package main
//
//func main() {
//	n1 := &ListNode{Val: 1}
//	n2 := &ListNode{Val: 2}
//	n3 := &ListNode{Val: 3}
//	n4 := &ListNode{Val: 4}
//	n5 := &ListNode{Val: 5}
//
//	n1.Next = n2
//	n2.Next = n3
//	n3.Next = n4
//	n4.Next = n5
//
//	removeNthFromEnd(n1, 2)
//}
//
//func removeNthFromEnd(head *ListNode, n int) *ListNode {
//	if head == nil || n == 0 {
//		return head
//	}
//	dummy := new(ListNode)
//	dummy.Next = head
//
//	fast, slow := dummy, dummy
//	for i := n; i > 0; i-- {
//		fast = fast.Next
//	}
//	for fast.Next != nil {
//		fast, slow = fast.Next, slow.Next
//	}
//	slow.Next = slow.Next.Next
//
//	return dummy.Next
//}
//
//type ListNode struct {
//	Val  int
//	Next *ListNode
//}
