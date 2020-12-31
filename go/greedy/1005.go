package main

import (
	"sort"
)

func largestSumAfterKNegations(A []int, K int) int {
	for i := 0; i < K; i++ {
		sort.Ints(A)
		A[0] = -A[0]
	}

	sum := 0
	for _, v := range A {
		sum += v
	}
	return sum
}
