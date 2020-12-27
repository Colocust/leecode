package main

import (
	"fmt"
)

func lemonadeChange(bills []int) bool {
	five, ten := 0, 0
	for _, v := range bills {
		switch v {
		case 5:
			five++
			break
		case 10:
			if five == 0 {
				return false
			}
			five--
			ten++
			break
		case 20:
			if five > 0 && ten > 0 {
				five--
				ten--
				break
			}
			if five >= 3 {
				five -= 3
				break
			}
			return false
		default:
			return false
		}
	}
	return true
}

func main() {
	data := []int{5, 5, 5, 5, 10, 20, 10}
	fmt.Println(lemonadeChange(data))
}
