package main

import (
	"fmt"
)

func countVowelStrings(n int) int {
	if n == 0 {
		return 0
	}
	var dp [50][5]int

	for i := 0; i < n; i++ {
		var item [5]int
		for j := 0; j < 5; j++ {
			var sum int
			if i == 0 {
				sum = 1
			} else {
				for k := j; k < 5; k++ {
					sum += dp[i-1][k]
				}
			}
			item[j] = sum
		}
		dp[i] = item
	}
	fmt.Println(dp)
	return dp[n-1][0] + dp[n-1][1] + dp[n-1][2] + dp[n-1][3] + dp[n-1][4]
}
