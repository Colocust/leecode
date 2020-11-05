package main

func addTwoNumbers(l1 *ListNode, l2 *ListNode) *ListNode {
	dummy, flag := new(ListNode), 0
	cur := dummy
	for l1 != nil || l2 != nil {
		sum := flag

		if l1 != nil {
			sum += l1.Val
			l1 = l1.Next
		}
		if l2 != nil {
			sum += l2.Val
			l2 = l2.Next
		}
		flag, sum = sum/10, sum%10
		cur.Next = &ListNode{Val: sum}
		cur = cur.Next
	}
	if flag > 0 {
		cur.Next = &ListNode{Val: flag}
		cur = cur.Next
	}
	return dummy.Next
}

type (
	ListNode struct {
		Val  int
		Next *ListNode
	}
)
