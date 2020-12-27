package main

import "sort"

func minSubsequence(nums []int) []int {
	sort.Sort(sort.Reverse(sort.IntSlice(nums)))

	sum := 0
	for _, v := range nums {
		sum += v
	}
	middle,index, cur := sum / 2,0, 0
	for {
		if index == len(nums) {
			break
		}
		cur += nums[index]
		if cur > middle {
			break
		}
		index++
	}
	return nums[:index+1]
}
