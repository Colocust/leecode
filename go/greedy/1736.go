package main

func maximumTime(time string) string {
	var result = ""

	for k, v := range time {
		if v == '?' {
			if k == 0 {
				if time[1] != '?' && time[1] > '3' {
					v = '1'
				} else {
					v = '2'
				}
			}
			if k == 1 {
				if result[0] == '2' {
					v = '3'
				} else {
					v = '9'
				}
			}
			if k == 3 {
				v = '5'
			}
			if k == 4 {
				v = '9'
			}
		}
		result += string(v)
	}

	return result
}
