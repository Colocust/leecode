package main

import (
	"fmt"
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

func main() {
	g := []int{1, 2, 3}
	s := []int{1, 1}

	fmt.Println(findContentChildren(g, s))
}
