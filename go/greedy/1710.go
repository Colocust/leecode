package main

import (
	"sort"
)

type SelfSorter [][]int

func (s SelfSorter) Len() int {
	return len(s)
}

func (s SelfSorter) Swap(i, j int) {
	s[i], s[j] = s[j], s[i]
}

func (s SelfSorter) Less(i, j int) bool {
	return s[i][1] > s[j][1]
}

func NewSorter(boxTypes [][]int) SelfSorter {
	selfSorter := make(SelfSorter, 0, len(boxTypes))
	for _, v := range boxTypes {
		selfSorter = append(selfSorter, v)
	}
	return selfSorter
}

func maximumUnits(boxTypes [][]int, truckSize int) int {
	length := len(boxTypes)
	if length == 0 {
		return 0
	}
	sorter := NewSorter(boxTypes)
	sort.Sort(sorter)

	sum := 0
	for _, item := range sorter {
		box, unit := item[0], item[1]
		for box > 0 && truckSize > 0 {
			sum += unit
			box--
			truckSize--
		}
		if truckSize == 0 {
			break
		}
	}

	return sum
}