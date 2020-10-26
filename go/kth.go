package main

import (
	"container/list"
	"fmt"
)

type Stack struct {
	List *list.List
}

func (s *Stack) Push(v interface{}) {
	s.List.PushBack(v)
}

func (s *Stack) Pop() interface{} {
	e := s.List.Back()
	if e != nil {
		s.List.Remove(e)
		return e.Value
	}
	return nil
}

func (s *Stack) isEmpty() bool {
	return s.List.Len() == 0
}

func NewStack() *Stack {
	l := new(list.List)
	return &Stack{l}
}

//寻找第K大的树
func findKthLargest(nums []int, k int) int {
	stack := NewStack()
	length := len(nums)
	stack.Push(0)
	stack.Push(length - 1)

	target := length - k
	for stack.isEmpty() == false {
		right := stack.Pop().(int)
		left := stack.Pop().(int)

		pivot := findPivot(nums, left, right)
		if pivot == target {
			return nums[target]
		}

		if pivot-1 > left {
			stack.Push(0)
			stack.Push(pivot - 1)
		}

		if pivot+1 < right {
			stack.Push(pivot + 1)
			stack.Push(length - 1)
		}

	}
	return nums[target]
}

func findPivot(nums []int, left int, right int) int {
	pivot := nums[left]
	for left < right {
		for left < right && nums[right] > pivot {
			right--
		}
		nums[left] = nums[right]
		for left < right && nums[left] <= pivot {
			left++
		}
		nums[right] = nums[left]
	}
	nums[left] = pivot
	return left
}

func main() {
	data := []int{7, 1, 0, 3, 5, 2, 10, 8, 1}

	fmt.Println(findKthLargest(data, 3))
}

func findKthLargestByHeap(nums []int, k int) int {

}
