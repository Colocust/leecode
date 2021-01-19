package main

import "fmt"

func rob(nums []int) int {
	length := len(nums)
	if length == 1 {
		return nums[0]
	}
	if length == 2 {
		return max(nums[0], nums[1])
	}

	dp0 := getDp(nums[0 : len(nums)-1])
	dp1 := getDp(nums[1:])

	return max(dp0, dp1)
}

func getDp(nums []int) int {
	dp0, dp1 := nums[0], max(nums[0], nums[1])
	for i := 2; i < len(nums); i++ {
		v := max(dp0+nums[i], dp1)
		dp0, dp1 = dp1, v
	}
	return dp1
}

func main() {
	nums := []int{1, 2, 3, 1}
	fmt.Println(rob(nums))
}
