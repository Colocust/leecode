package main

func balancedStringSplit(s string) int {
	res, sumL, sumR := 0, 0, 0
	for i := 0; i < len(s); i++ {
		if s[i] == 'L' {
			sumL++
		} else {
			sumR++
		}

		if sumL == sumR {
			res++
			sumL, sumR = 0, 0
		}
	}
	return res
}
