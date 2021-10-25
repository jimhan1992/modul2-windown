<?php
function search(array $arr, int $number): int
{
    $count = 0;
    foreach ($arr as $item) {
        if ($number === $item) {
            $count++;
        }
    }
    return $count;
}

$arr = [1, 2, 1, 5, 3, 5, 321, 5, 2, 6, 32, 5, 3, 4, 5, 3, 1, 7, 8, 3, 1, 5, 5, 5, 2];
echo "số lần xuất hiện là: " . search($arr, 9);