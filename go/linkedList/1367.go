package main

//type TreeNode struct {
//	Val   int
//	Left  *TreeNode
//	Right *TreeNode
//}
//
//type ListNode struct {
//	Val  int
//	Next *ListNode
//}

// 这种写法 当root.Val != head.Val时 head没有回到头节点
//func isSubPath(head *ListNode, root *TreeNode) bool {
//	if head == nil {
//		return true
//	}
//	if root == nil {
//		return false
//	}
//
//	if root.Val == head.Val {
//		return isSubPath(head.Next, root.Left) || isSubPath(head.Next, root.Right)
//	}
//	return isSubPath(head, root.Left) || isSubPath(head, root.Right)
//}

//func isSubPath(head *ListNode, root *TreeNode) bool {
//	if head == nil {
//		return true
//	}
//	if root == nil {
//		return false
//	}
//
//	return dfs(head, root) || isSubPath(head, root.Left) || isSubPath(head, root.Right)
//}
//
//func dfs(head *ListNode, root *TreeNode) bool {
//	if head == nil {
//		return true
//	}
//	if root == nil {
//		return false
//	}
//
//	if root.Val != head.Val {
//		return false
//	}
//	return dfs(head.Next, root.Left) || dfs(head.Next, root.Right)
//}