package main

func maxDepthAfterSplit(seq string) []int {
	res := make([]int, 0)

	depth := 0
	for _, s := range seq {
		if s == '(' {
			depth++
			res = append(res, depth%2)
		} else {
			res = append(res, depth%2)
			depth--
		}
	}

	return res
}