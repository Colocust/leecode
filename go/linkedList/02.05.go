package main
//
//func addTwoNumbers(l1 *ListNode, l2 *ListNode) *ListNode {
//	dummy := new(ListNode)
//	cur := dummy
//	flag := 0
//	for l1 != nil || l2 != nil {
//		v1 := 0
//		if l1 != nil {
//			v1, l1 = l1.Val, l1.Next
//		}
//		v2 := 0
//		if l2 != nil {
//			v2, l2 = l2.Val, l2.Next
//		}
//		sum := (v1 + v2 + flag) % 10
//		flag = (v1 + v2 + flag) / 10
//
//		cur.Next = &ListNode{Val: sum}
//		cur = cur.Next
//	}
//
//	if flag != 0 {
//		cur.Next = &ListNode{Val: flag}
//	}
//	return dummy.Next
//}
//
//func main() {
//	l11 := &ListNode{Val: 9}
//	l12 := &ListNode{Val: 1}
//	l13 := &ListNode{Val: 6}
//	l11.Next = l12
//	l12.Next = l13
//
//	l21 := &ListNode{Val: 0}
//	//l22 := &ListNode{Val: 9}
//	//l23 := &ListNode{Val: 5}
//	//l21.Next = l22
//	//l22.Next = l23
//
//	addTwoNumbers(l11, l21)
//}
//
//type ListNode struct {
//	Val  int
//	Next *ListNode
//}
