<?php
function insertionSort($arr): array
{
    for ($i = 0; $i < count($arr); $i++) {
        $val = $arr[$i];
        $j = $i - 1;
        while ($j >= 0 && $arr[$j] < $val) {
            $arr[$j + 1] = $arr[$j];
            $j--;
        }
        $arr[$j + 1] = $val;
    }
    return $arr;
}

$arr = [5, -4, 3, 7, 2, 1, 0, 8, 9, 2];
echo implode(",", insertionSort($arr));