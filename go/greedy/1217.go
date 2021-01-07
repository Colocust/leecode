package main

func minCostToMoveChips(position []int) int {
	odd, even := 0, 0
	for _, v := range position {
		if v%2 == 0 {
			even++
		} else {
			odd++
		}
	}
	if odd < even {
		return odd
	}
	return even
}
