package main

func partitionLabels(S string) []int {
	result, partition := make([]int, 0), make(map[rune]int)

	for i, s := range S {
		partition[s] = i
	}

	start, end := 0, 0

	for i, s := range S {
		end = max(end, partition[s])
		if i == end {
			result = append(result, end-start+1)
			start = end + 1
		}
	}

	return result
}
