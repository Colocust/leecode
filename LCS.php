<?php

function Lcs(string $s1, string $s2): int {
    $l1 = strlen($s1);
    $l2 = strlen($s2);

    return findLcs($s1, $s2, $l1 - 1, $l2 - 1);
}

function findLcs(string $s1, string $s2, int $l1, int $l2): int {
    if ($l1 < 0 || $l2 < 0) return 0;
    if ($s1[$l1] == $s2[$l2]) {
        return 1 + findLcs($s1, $s2, $l1 - 1, $l2 - 1);
    }
    return max(findLcs($s1, $s2, $l1 - 1, $l2), findLcs($s1, $s2, $l1, $l2 - 1));
}


function LcsDP(string $s1, string $s2): string {
    $l1 = strlen($s1);
    $l2 = strlen($s2);

    if ($l1 == 0 || $l2 == 0) return 0;

    $dp = [];
    $max = 0;

    if ($s1[0] == $s2[0]) {
        $dp[0][0] = 1;
        $max = 1;
    } else {
        $dp[0][0] = 0;
    }

    for ($i = 1; $i < $l1; $i++) {
        if ($s1[$i] == $s2[0]) {
            $dp[$i][0] = 1;
            $max = 1;
        } else {
            $dp[$i][0] = $dp[$i - 1][0];
        }
    }

    for ($i = 1; $i < $l2; $i++) {
        if ($s1[0] == $s2[$i]) {
            $dp[0][$i] = 1;
            $max = 1;
        } else {
            $dp[0][$i] = $dp[0][$i - 1];
        }
    }

    for ($i = 1; $i < $l1; $i++) {
        for ($j = 1; $j < $l2; $j++) {
            if ($s1[$i] == $s2[$j]) {
                $dp[$i][$j] = 1 + $dp[$i - 1][$j - 1];
            } else {
                $dp[$i][$j] = max($dp[$i - 1][$j], $dp[$i][$j - 1]);
            }
            $max = max($max, $dp[$i][$j]);
        }
    }

    $res = '';
    for ($i = $l1 - 1; $i >= 0; $i--) {
        for ($j = $l2 - 1; $j >= 0; $j--) {
            if ($dp[$i][$j] == $max && $s1[$i] == $s2[$j]) {
                $res .= $s2[$j];
                $max--;
            }

            if ($max == 0) {
                return $res;
            }
        }
    }
    return $res;
}

$s1 = 'dsda';
$s2 = 'gags';
echo LcsDP($s1, $s2) . PHP_EOL;