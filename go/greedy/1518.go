package main

func numWaterBottles(numBottles int, numExchange int) int {
	sum, full, empty := 0, numBottles, 0
	for i := 1; i <= full; i++ {
		sum++
		empty++
		if empty == numExchange {
			empty = 0
			full++
		}
	}

	return sum
}
