package main

func matrixScore(A [][]int) int {
	width, height := len(A[0]), len(A)
	ans := height * (1 << (width - 1))
	for w := 1; w < width; w++ {
		num1 := 0
		for _, v := range A {
			if v[0] == v[w] {
				num1++
			}
		}

		if num1 < height-num1 {
			num1 = height - num1
		}

		ans += num1 * (1 << (width - 1 - w))
	}

	return ans
}
