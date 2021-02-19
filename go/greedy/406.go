package main

import (
	"sort"
)

type SelfSort [][]int

func (s SelfSort) Len() int {
	return len(s)
}

func (s SelfSort) Swap(i, j int) {
	s[i], s[j] = s[j], s[i]
}

func (s SelfSort) Less(i, j int) bool {
	if s[i][0] == s[j][0] {
		return s[i][1] > s[j][1]
	}
	return s[i][0] < s[j][0]
}

func reconstructQueue(people [][]int) [][]int {
	p := make(SelfSort, 0, len(people))
	for _, v := range people {
		p = append(p, v)
	}
	sort.Sort(p)
	index := make([]int, 0)
	for i := 0; i < len(people); i++ {
		index = append(index, i)
	}

	res := make([][]int, len(people))
	for _, v := range p {
		res[index[v[1]]] = v
		index = append(index[:v[1]], index[v[1]+1:]...)
	}

	return res
}
