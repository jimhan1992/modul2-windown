<?php

use JetBrains\PhpStorm\Pure;

#[Pure] function selectionSort($arr)
{
    for ($i = 0; $i < count($arr) - 1; $i++) {
        $min = $i;
        for ($j = $i + 1; $j < count($arr); $j++) {
            if ($arr[$j] < $arr[$min]) {
                $min = $j;
            }
        }
        $arr = swapPositions($arr, $i, $min);
    }
    return $arr;
}

function swapPositions($data, $left, $right)
{
    $backupOldDataRightValue = $data[$right];
    $data[$right] = $data[$left];
    $data[$left] = $backupOldDataRightValue;
    return $data;
}
$arr= [1, 9, 4.5, 6.6, 5.7, -4.5];
echo implode(",",selectionSort($arr));