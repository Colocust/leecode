package main
//
//func rob(nums []int) int {
//	length := len(nums)
//	if length == 0 {
//		return 0
//	}
//	if length == 1 {
//		return nums[0]
//	}
//	dp := make([]int, length)
//	dp[0], dp[1] = nums[0], max(nums[0], nums[1])
//	for i := 2; i < length; i++ {
//		dp[i] = max(nums[i]+dp[i-2], dp[i-1])
//	}
//	return dp[length-1]
//}
