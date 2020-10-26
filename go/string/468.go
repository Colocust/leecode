package main

import (
	"strconv"
	"strings"
)

func validIPAddress(IP string) string {
	if checkIpv4(IP) {
		return "IPv4"
	}
	if checkIpv6(IP) {
		return "IPv6"
	}
	return "Neither"
}

func checkIpv4(IP string) bool {
	s4 := strings.Split(IP, ".")
	if len(s4) != 4 {
		return false
	}

	for _, s := range s4 {
		if (len(s) == 0) || (len(s) > 1 && s[0] == '0') {
			return false
		}
		if s[0] < '0' || s[0] > '9' {
			return false
		}
		i, err := strconv.Atoi(s)
		if err != nil {
			return false
		}
		if i < 0 || i > 255 {
			return false
		}
	}
	return true
}

func checkIpv6(IP string) bool {
	s6 := strings.Split(IP, ":")
	if len(s6) != 8 {
		return false
	}

	for _, s := range s6 {
		if len(s) < 1 || len(s) > 4 {
			return false
		}

		for _, item := range s {
			if item >= '0' && item <= '9' {
				continue
			}
			if item >= 'a' && item <= 'f' {
				continue
			}
			if item >= 'A' && item <= 'F' {
				continue
			}
			return false
		}
	}

	return true
}
