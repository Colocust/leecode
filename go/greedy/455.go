package main

import (
	"sort"
)

func findContentChildren(g []int, s []int) int {
	sort.Sort(sort.Reverse(sort.IntSlice(g)))
	sort.Sort(sort.Reverse(sort.IntSlice(s)))

	gi, si, res := 0, 0, 0
	for gi < len(g) && si < len(s) {
		if s[si] >= g[gi] {
			si++
			res++
		}
		gi++
	}

	return res
}

