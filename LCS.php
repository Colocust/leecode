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


function LcsDP(string $s1, string $s2): int {
  $l1 = strlen($s1);
  $l2 = strlen($s2);

  $dp = [];
  $dp[-1] = 0;
  $index = 0;
  for ($i = 0; $i < $l1; $i++) {
    $dp[$i] = $dp[$i - 1];
    for ($j = $index; $j < $l2; $j++) {
      if ($s1[$i] == $s2[$j]) {
        $dp[$i]++;
        $index = $j + 1;
        continue 2;
      }
    }
  }
  return $dp[$l1 - 1];
}

$s1 = 'das';
$s2 = 'l';
echo LcsDP($s1, $s2) . PHP_EOL;