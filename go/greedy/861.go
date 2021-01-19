package main

func matrixScore(A [][]int) int {
	height, width := len(A), len(A[0])
	ans := height * (1 << (width - 1))

	for w := 1; w < width; w++ {
		numOf1 := 0
		for h := 0; h < height; h++ {
			if A[h][0] == A[h][w] {
				numOf1++
			}
		}

		if height-numOf1 > numOf1 {
			numOf1 = height - numOf1
		}
		ans += numOf1 * (1 << (width - 1 - w))
	}

	return ans
}
