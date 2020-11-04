package main

//import (
//	"container/list"
//	"fmt"
//)
//
//type TreeNode struct {
//	Val   int
//	Left  *TreeNode
//	Right *TreeNode
//}
//
//func zigzagLevelOrder(root *TreeNode) [][]int {
//	var res [][]int
//	if root == nil {
//		return res
//	}
//
//	l, flag := new(list.List), 1
//	l.PushFront(root)
//
//	for l.Len() != 0 {
//		var item []int
//		length := l.Len()
//		for i := 0; i < length; i++ {
//			v := l.Back()
//			l.Remove(v)
//
//			node := v.Value.(*TreeNode)
//			item = append(item, node.Val)
//
//			if node.Left != nil {
//				l.PushFront(node.Left)
//			}
//			if node.Right != nil {
//				l.PushFront(node.Right)
//			}
//		}
//
//		if flag%2 == 0 {
//			reverse(item)
//		}
//		res = append(res, item)
//		flag++
//	}
//
//	return res
//}
//
//func reverse(s []int) {
//	for i, j := 0, len(s)-1; i < j; i, j = i+1, j-1 {
//		s[i], s[j] = s[j], s[i]
//	}
//}
//func main() {
//	n1 := &TreeNode{Val: 3}
//	n2 := &TreeNode{Val: 9}
//	n3 := &TreeNode{Val: 20}
//	n4 := &TreeNode{Val: 15}
//	n5 := &TreeNode{Val: 7}
//
//	n1.Left = n2
//	n1.Right = n3
//	n3.Left = n4
//	n3.Right = n5
//
//	fmt.Println(zigzagLevelOrder(n1))
//}
