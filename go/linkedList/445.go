package main
//
//import (
//	"container/list"
//)
//
//type ListNode struct {
//	Val  int
//	Next *ListNode
//}
//
//func addTwoNumbers(l1 *ListNode, l2 *ListNode) *ListNode {
//	s1, s2, s, index := NewStack(), NewStack(), NewStack(), 0
//	for l1 != nil {
//		s1.Push(l1.Val)
//		l1 = l1.Next
//	}
//	for l2 != nil {
//		s2.Push(l2.Val)
//		l2 = l2.Next
//	}
//
//	for s1.isEmpty() == false && s2.isEmpty() == false {
//		sum := s1.Pop().(int) + s2.Pop().(int) + index
//		index = 0
//		if sum >= 10 {
//			sum = sum - 10
//			index++
//		}
//
//		s.Push(sum)
//	}
//	for s1.isEmpty() == false {
//		v := s1.Pop().(int) + index
//		index = 0
//		if v >= 10 {
//			v = v - 10
//			index++
//		}
//		s.Push(v)
//	}
//	for s2.isEmpty() == false {
//		v := s2.Pop().(int) + index
//		index = 0
//		if v >= 10 {
//			v = v - 10
//			index++
//		}
//		s.Push(v)
//	}
//	if index == 1 {
//		s.Push(1)
//	}
//
//	l := new(ListNode)
//	cur := l
//	for s.isEmpty() == false {
//		cur.Next = &ListNode{Val: s.Pop().(int)}
//		cur = cur.Next
//	}
//	return l.Next
//}
//
//type Stack struct {
//	List *list.List
//}
//
//func (s *Stack) Push(v interface{}) {
//	s.List.PushBack(v)
//}
//
//func (s *Stack) Pop() interface{} {
//	e := s.List.Back()
//	if e != nil {
//		s.List.Remove(e)
//		return e.Value
//	}
//	return nil
//}
//
//func (s *Stack) isEmpty() bool {
//	return s.List.Len() == 0
//}
//
//func NewStack() *Stack {
//	l := new(list.List)
//	return &Stack{l}
//}
//
//func main() {
//	l1 := &ListNode{Val: 7}
//	l2 := &ListNode{Val: 2}
//	l3 := &ListNode{Val: 4}
//	l4 := &ListNode{Val: 3}
//
//	r1 := &ListNode{Val: 5}
//	r2 := &ListNode{Val: 6}
//	r3 := &ListNode{Val: 4}
//
//	l1.Next = l2
//	l2.Next = l3
//	l3.Next = l4
//
//	r1.Next = r2
//	r2.Next = r3
//
//	addTwoNumbers(l1, r1)
//}
