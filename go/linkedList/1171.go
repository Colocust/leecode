package main

//func removeZeroSumSublists(head *ListNode) *ListNode {
//	if head == nil {
//		return head
//	}
//	dummy := new(ListNode)
//	dummy.Next = head
//
//	current := dummy
//	for current != nil {
//		pre, sum := current.Next, 0
//
//		for pre != nil {
//			sum += pre.Val
//			pre = pre.Next
//			if sum == 0 {
//				current.Next = pre
//				break
//			}
//		}
//		if pre == nil {
//			current = current.Next
//		}
//	}
//
//	return dummy.Next
//}
//
//func main() {
//
//}
//
//type ListNode struct {
//	Val  int
//	Next *ListNode
//}
