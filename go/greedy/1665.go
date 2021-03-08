package main

import (
	"sort"
)

func minimumEffort(tasks [][]int) int {
	res := 0
	s := make(selfSort, 0)
	for _, t := range tasks {
		s = append(s, t)
		res += t[0]
	}
	sort.Sort(s)
	power := res
	for _, item := range s {
		if power < item[1] {
			add := item[1] - power
			power += add
			res += add
		}
		power -= item[0]
	}

	return res
}

type selfSort [][]int

func (s selfSort) Len() int {
	return len(s)
}

func (s selfSort) Swap(i, j int) {
	s[i], s[j] = s[j], s[i]
}

func (s selfSort) Less(i, j int) bool {
	if s[i][1]-s[i][0] > s[j][1]-s[j][0] {
		return true
	} else if s[i][1]-s[i][0] == s[j][1]-s[j][0] {
		if s[i][1] > s[j][1] {
			return true
		}
		return false
	} else {
		return false
	}
}
