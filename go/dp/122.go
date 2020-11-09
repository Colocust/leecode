package main

func max(x int, y int) int {
	if x > y {
		return x
	}
	return y
}

func maxProfit(prices []int) int {
	length := len(prices)
	if length == 0 {
		return 0
	}

	dp := make([][]int, length)
	dp[0] = []int{0, -prices[0]}
	for i := 1; i < length; i++ {
		dp[i] = []int{max(dp[i-1][0], dp[i-1][1]+prices[i]), max(dp[i-1][1], dp[i-1][0]-prices[i])}
	}

	return max(dp[length-1][0], dp[length-1][1])
}
