<?php
$arr1 = [6, 7, 8, 9, 10];
$arr2 = [1, 2, 3, 4, 5];

function concat($arr1, $arr2): array
{
    $data = array();
    for ($i = 0; $i < count($arr1); $i++) {
        array_push($data, $arr1[$i]);
    }
    for ($j = 0; $j < count($arr2); $j++) {
        array_push($data, $arr2[$j]);
    }
return $data;
}

echo implode(",",concat($arr1, $arr2));