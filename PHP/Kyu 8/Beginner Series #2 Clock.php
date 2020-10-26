<?php
function past($h, $m, $s) {
    $reuslt = 0;
    $h = $h * 60 * 60 * 1000;
    $m = $m * 60 * 1000;
    $s = $s * 1000;

    $result = $h + $m + $s;
    return $result;
}
