package main

func countGoodRectangles(rectangles [][]int) int {
	maxLen, result := 0, 0

	for _, item := range rectangles {
		length := min(item[0], item[1])
		if length > maxLen {
			maxLen, result = length, 1
			continue
		}
		if length == maxLen {
			result++
		}
	}
	return result
}
