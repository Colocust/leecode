package main

func maxProfit(prices []int) int {
	length := len(prices)
	if length == 0 {
		return 0
	}
	var (
		dp [][2]int
	)

	dp = append(dp, [2]int{0, -prices[0]})

	for i := 1; i < length; i++ {
		var item [2]int
		item[0] = max(dp[i-1][0], dp[i-1][1]+prices[i])
		item[1] = max(dp[i-1][1], -prices[i])

		dp = append(dp, item)
	}

	//dp[i][k][0] = max(dp[i-1][k][0], dp[i-1][k][1] + $prices[i]);
	//dp[i][k][1] = max(dp[i-1][k][1], dp[i-1][k-1][0] - $prices[i]);
	return max(dp[length-1][0], dp[length-1][1])
}
