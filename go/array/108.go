package main


func sortedArrayToBST(nums []int) *TreeNode {
	length := len(nums)
	if length == 0 {
		return nil
	}
	if length == 1 {
		return &TreeNode{Val: nums[0]}
	}
	middle := (length - 1) / 2
	left := nums[:middle]
	right := nums[(middle+1):]

	node := new(TreeNode)
	node.Val = nums[middle]
	node.Left = sortedArrayToBST(left)
	node.Right = sortedArrayToBST(right)

	return node
}

type TreeNode struct {
	Val   int
	Left  *TreeNode
	Right *TreeNode
}
