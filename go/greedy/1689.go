package main

func minPartitions(n string) int {
	ans := -1
	for _, v := range n {
		if int(v-'0') > ans {
			ans = int(v - '0')
		}
	}
	return ans
}

