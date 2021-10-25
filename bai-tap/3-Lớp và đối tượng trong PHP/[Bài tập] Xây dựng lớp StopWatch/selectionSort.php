<?php

//$data type array
use JetBrains\PhpStorm\Pure;

#[Pure] function selection_sort($data)
{
    for ($i = 0; $i < count($data) - 1; $i++) {
        $min = $i;
        for ($j = $i + 1; $j < count($data); $j++) {
            if ($data[$j] < $data[$min]) {
                $min = $j;
            }
        }
        $data = swap_position($data, $i, $min);
    }
    return $data;
}

function swap_position($data, $left, $right)
{
    $temp = $data[$right];
    $data[$right] = $data[$left];
    $data[$left] = $temp;
    return $data;
}