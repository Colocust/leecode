package main

func minCostClimbingStairs(cost []int) int {
	length := len(cost)
	if length == 0 {
		return 0
	}
	if length == 1 {
		return cost[0]
	}
	dp := make([]int, length+1)
	dp[0], dp[1] = cost[0], cost[1]

	for i := 2; i < length; i++ {
		dp[i] = cost[i] + min(dp[i-1], dp[i-2])
	}
	return min(dp[length-1], dp[length-2])
}
