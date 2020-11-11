package main

func isSubsequence(s string, t string) bool {
	ls, lt := len(s), len(t)
	if ls == 0 {
		return true
	}

	is, it := 0, 0
	for it < lt {
		if s[is] == t[it] {
			is++
		}
		if is == ls {
			return true
		}
		it++
	}
	return false
}
