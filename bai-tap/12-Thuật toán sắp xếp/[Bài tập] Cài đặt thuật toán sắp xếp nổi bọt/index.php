<?php
function bubbleSort($arr)
{
    $count = count($arr);
    for ($i = 0; $i < $count; $i++) {
        for ($j = 0; $j < $count - $i - 1; $j++) {
            if ($arr[$j] > $arr[$j + 1]) {
                $temp = $arr[$j];
                $arr[$j] = $arr[$j + 1];
                $arr[$j + 1] = $temp;

            }
        }
    }
    return $arr;
}

$array = [2, 3, 2, 5, 6, 1, -2, 3, 14, 12];
echo implode(', ', bubbleSort($array));
