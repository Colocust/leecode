package main
//
//func main() {
//	n1 := &ListNode{Val: 1}
//	n2 := &ListNode{Val: 2}
//	n3 := &ListNode{Val: 3}
//	n4 := &ListNode{Val: 4}
//	n5 := &ListNode{Val: 5}
//	n1.Next = n2
//	n2.Next = n3
//	n3.Next = n4
//	n4.Next = n5
//
//	rotateRight(n1, 2)
//}
//
//type ListNode struct {
//	Val  int
//	Next *ListNode
//}
//
//func rotateRight(head *ListNode, k int) *ListNode {
//	if head == nil || head.Next == nil {
//		return head
//	}
//
//	length, tail := 1, head
//	for tail.Next != nil {
//		tail = tail.Next
//		length++
//	}
//	tail.Next = head
//	cycleTime := length - (k % length)
//	for cycleTime > 0 {
//		cycleTime--
//		head, tail = head.Next, tail.Next
//	}
//	tail.Next = nil
//	return head
//}
