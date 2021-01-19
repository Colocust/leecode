package main

import (
	"fmt"
	"strconv"
)

func decodeString(s string) string {
	var stack = make([]string, 0)

	for _, v := range s {
		value := string(v)
		if value == "]" {
			temp := ""
			for stack[len(stack)-1] != "[" {
				temp += stack[len(stack)-1]
				stack = stack[:len(stack)-1]
			}
			stack = stack[:len(stack)-1]
			num := ""
			for len(stack) > 0 && isNumeric(stack[len(stack)-1]) {
				num += stack[len(stack)-1]
				stack = stack[:len(stack)-1]
			}
			number, _ := strconv.Atoi(reverse(num))
			for number > 0 {
				for j := len(temp) - 1; j >= 0; j-- {
					stack = append(stack, string(temp[j]))
				}
				number--
			}
		} else {
			stack = append(stack, value)
		}
	}

	return sliceToString(stack)
}

func sliceToString(stack []string) string {
	ans := ""

	for _, v := range stack {
		ans += v
	}

	return ans
}

func isNumeric(v string) bool {
	if v >= "0" && v <= "9" {
		return true
	}
	return false
}

func reverse(s string) string {
	ans := ""
	for i := len(s) - 1; i >= 0; i-- {
		ans += string(s[i])
	}
	return ans
}

func main() {
	s := "3[a2[c]]"

	fmt.Println(decodeString(s))
}
