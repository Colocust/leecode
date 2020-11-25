package main

func countBits(num int) []int {
	var dp []int
	dp = append(dp, 0)
	if num == 0 {
		return dp
	}
	for i := 1; i <= num; i++ {
		var item int
		if i%2 == 0 {
			item = dp[i/2]
		} else {
			item = dp[i-1] + 1
		}
		dp = append(dp, item)
	}
	return dp
}
