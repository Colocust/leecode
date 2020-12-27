package main

func minDeletionSize(A []string) int {
	height := len(A)
	if height <= 1 {
		return 0
	}
	width, res := len(A[0]), 0

OuterLoop:
	for i := 0; i < width; i++ {
		for j := 1; j < height; j++ {
			if A[j][i] < A[j-1][i] {
				res++
				continue OuterLoop
			}
		}
	}
	return res
}
