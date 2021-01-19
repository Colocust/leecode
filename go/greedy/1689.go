package main

import (
	"fmt"
)

func minPartitions(n string) int {
	ans := -1
	for _, v := range n {
		if int(v-'0') > ans {
			ans = int(v - '0')
		}
	}
	return ans
}

func main() {
	xc := "13131231"
	fmt.Println(minPartitions(xc))
}
