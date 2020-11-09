package main

//func maxProfit(prices []int) int {
//	if len(prices) == 0 {
//		return 0
//	}
//	var dp [][]int
//	length, init := len(prices), []int{0, -prices[0]}
//	dp = append(dp, init)
//
//	for i := 1; i < length; i++ {
//		item := make([]int, 2)
//		item[0] = max(prices[i]+dp[i-1][1], dp[i-1][0])
//		item[1] = max(dp[i-1][1], -prices[i])
//		dp = append(dp,item)
//	}
//	return max(dp[length-1][1], dp[length-1][0])
//}
//
//func max(x int, y int) int {
//	if x > y {
//		return x
//	}
//	return y
//}

