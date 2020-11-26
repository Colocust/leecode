package main

func main() {

}

func countSquares(matrix [][]int) int {
	var dp [300][300]int
	x, y := len(matrix[0]), len(matrix)

	sum := 0

	for i := range matrix {
		dp[i][0] = matrix[i][0]
		sum += dp[i][0]
	}
	for i := range matrix[0] {
		if i > 0 {
			dp[0][i] = matrix[0][i]
			sum += dp[0][i]
		}
	}

	for i := 1; i < y; i++ {
		for j := 1; j < x; j++ {
			if matrix[i][j] == 1 {
				dp[i][j] = min(min(dp[i][j-1], dp[i-1][j]), dp[i-1][j-1]) + 1
				sum += dp[i][j]
			}
		}
	}
	return sum
}
