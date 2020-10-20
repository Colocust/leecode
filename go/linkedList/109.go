package main

//type (
//	ListNode struct {
//		Val  int
//		Next *ListNode
//	}
//	TreeNode struct {
//		Val   int
//		Left  *TreeNode
//		Right *TreeNode
//	}
//)
//
//func sortedListToBST(head *ListNode) *TreeNode {
//	if head == nil {
//		return nil
//	}
//	if head.Next == nil {
//		return &TreeNode{Val: head.Val}
//	}
//	fast, slow := head, head
//
//	var cur *ListNode
//
//	for fast != nil && fast.Next != nil {
//		cur = slow
//		fast = fast.Next.Next
//		slow = slow.Next
//	}
//	cur.Next = nil
//
//	node := new(TreeNode)
//	node.Val = slow.Val
//	node.Left = sortedListToBST(head)
//	node.Right = sortedListToBST(slow.Next)
//
//	return node
//}