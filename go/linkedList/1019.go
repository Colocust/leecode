package main
//
//import "container/list"
//
//type ListNode struct {
//	Val  int
//	Next *ListNode
//}
//
//func nextLargerNodes(head *ListNode) []int {
//	var s []int
//	length := 0
//
//	for head != nil {
//		s, head = append(s, head.Val), head.Next
//		length++
//	}
//	result := make([]int, length)
//	stack := NewStack()
//
//	for k, v := range s {
//		for stack.isEmpty() == false && s[stack.Peek().(int)] < v {
//			result[stack.Pop().(int)] = v
//		}
//		stack.Push(k)
//	}
//	return result
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
//func (s *Stack) Peek() interface{} {
//	return s.List.Back().Value
//}
//
//func NewStack() *Stack {
//	l := new(list.List)
//	return &Stack{l}
//}
