package main

func totalMoney(n int) int {
	start, sum := 1, 0
	week, day := n/7, n%7

	for i := 0; i < week; i++ {
		cur := start
		for j := 1; j <= 7; j++ {
			sum += cur
			cur++
		}
		start++
	}

	for d := 1; d <= day; d++ {
		sum += start
		start++
	}

	return sum
}
