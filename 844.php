<?php

class Solution {

    /**
     * @param String $S
     * @param String $T
     * @return Boolean
     */
    function backspaceCompare($S, $T) {
        $sStack = [];
        $tStack = [];

        for ($s = 0; $s < strlen($S); $s++) {
            if ($S[$s] == '#') {
                if ($sStack) {
                    array_pop($sStack);
                }
            } else {
                $sStack[] = $S[$s];
            }
        }

        for ($t = 0; $t < strlen($T); $t++) {
            if ($T[$t] == '#') {
                if ($tStack) {
                    array_pop($tStack);
                }
            } else {
                $tStack[] = $T[$t];
            }
        }
        return $sStack == $tStack;
    }
}