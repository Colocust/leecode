package main

func isSubsequence(s string, t string) bool {
	sI, tI, sL, tL := 0, 0, len(s), len(t)
	if sL == 0 {
		return true
	}

	for sI < sL {
		if tI == tL {
			return false
		}
		if s[sI] == t[tI] {
			sI++
		}
		if sI == sL {
			return true
		}
		tI++
	}

	return false
}
