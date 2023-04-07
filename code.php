<?php
function rotLeft($ar, $d) {
    $temp = [];
    for($i = 0; $i < $d; $i++) {
        $temp[$i] = $ar[$i];
    }
    $ar = array_slice($ar, $d);
    $result = array_merge($ar, $temp);
    return $result;
}

$arr = [1, 2, 3, 4, 5];
$d = 4;
print_r(rotLeft($arr, $d));