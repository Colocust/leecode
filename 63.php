<?php

class Solution {

    /**
     * @param Integer[][] $obstacleGrid
     * @return Integer
     */
    function uniquePathsWithObstacles($obstacleGrid) {
        $dp = [];

        $x = count($obstacleGrid[0]);
        $y = count($obstacleGrid);

        $dp[0][0] = $obstacleGrid[0][0] == 1 ? 0 : 1;

        for ($i = 1; $i < $x; $i++) {
            $dp[0][$i] = $obstacleGrid[0][$i] == 1 ? 0 : $dp[0][$i - 1];
        }

        for ($j = 1; $j < $y; $j++) {
            $dp[$j][0] = $obstacleGrid[$j][0] == 1 ? 0 : $dp[$j - 1][0];
        }

        for ($i = 1; $i < $y; $i++) {
            for ($j = 1; $j < $x; $j++) {
                $dp[$i][$j] = $obstacleGrid[$i][$j] == 1 ? 0 : $dp[$i - 1][$j] + $dp[$i][$j - 1];
            }
        }
        return $dp[$y - 1][$x - 1];
    }
}

$solution = new Solution();
var_dump($solution->uniquePathsWithObstacles([
    [0, 0, 0],
    [0, 1, 0],
    [0, 0, 0]
]));