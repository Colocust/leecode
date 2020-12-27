package main

import (
	"sort"
)

func lastStoneWeight(stones []int) int {
	length := len(stones)
	if length == 0 {
		return 0
	}
	if length == 1 {
		return stones[0]
	}
	sort.Sort(sort.Reverse(sort.IntSlice(stones)))
	now := stones[0:2]
	stones = stones[2:]

	if now[0] == now[1] {
		return lastStoneWeight(stones)
	} else {
		stones = append(stones, now[0]-now[1])
		return lastStoneWeight(stones)
	}
}