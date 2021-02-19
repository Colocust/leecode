package main

func restoreMatrix(rowSum []int, colSum []int) [][]int {
	res := make([][]int, 0)
	for i := 0; i < len(rowSum); i++ {
		item := make([]int, 0)

		for j := 0; j < len(colSum); j++ {
			value := min(rowSum[i], colSum[j])
			rowSum[i] -= value
			colSum[j] -= value
			item = append(item, value)
		}

		res = append(res, item)
	}

	return res
}
