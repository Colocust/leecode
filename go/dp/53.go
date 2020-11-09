package main

func main() {

}

func maxSubArray(nums []int) int {
	dp, maxNum := nums[0], nums[0]

	for i := 1; i < len(nums); i++ {
		dp = GetMax(nums[i], dp+nums[i])
		maxNum = GetMax(maxNum, dp)
	}
	return maxNum
}

func GetMax(x int, y int) int {
	if x > y {
		return x
	}
	return y
}