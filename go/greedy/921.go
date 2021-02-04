package main

func minAddToMakeValid(S string) int {
	left, right := 0, 0

	for _, s := range S {
		if s == '(' {
			left++
		} else {
			if left == 0 {
				right++
			} else {
				left--
			}
		}
	}
	return left + right

	//stack := make([]string, 0)
	//
	//for i := 0; i < len(S); i++ {
	//	s, l := string(S[i]), len(stack)
	//
	//	if l == 0 || s == "(" {
	//		stack = append(stack, s)
	//		continue
	//	}
	//
	//	if stack[l-1] == "(" {
	//		stack = stack[:l-1]
	//	} else {
	//		stack = append(stack, s)
	//	}
	//}
}
