package main

//func splitListToParts(root *ListNode, k int) []*ListNode {
//	//求链表长度
//	head, length := root, 0
//	for head != nil {
//		head = head.Next
//		length++
//	}
//	//求出每个数组平均节点个数以及没有平均完的个数
//	avg, remind := length/k, length%k
//
//	var ret []*ListNode
//
//	for i := 0; i < k; i++ {
//		ret = append(ret, root)
//
//		time := avg
//		if remind > 0 {
//			time++
//		}
//
//		var cur *ListNode
//		for j := 0; j < time; j++ {
//			cur, root = root, root.Next
//		}
//
//		//切断当前数组元素节点的下一个节点
//		if cur != nil {
//			cur.Next = nil
//		}
//		remind--
//	}
//	return ret
//}
//
//type ListNode struct {
//	Val  int
//	Next *ListNode
//}
