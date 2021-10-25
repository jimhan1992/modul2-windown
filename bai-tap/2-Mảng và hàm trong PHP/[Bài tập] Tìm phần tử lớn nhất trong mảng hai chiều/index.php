<?php
$arr = [
    [1,4,5,6,3,1,5],
    [5,6,8,2,4,9],
    [8,5,6,9,77,2,5,2],
    [11,5,2,55,2,66]
];
function check_max($arr): string
{
    $max=$arr[0][0];
    $index="";
    for ($i=0;$i<count($arr);$i++){
        for($j=$i;$j<count($arr[$i]);$j++){
            if($arr[$i][$j]>$max){
                $max=$arr[$i][$j];
                $index ="[$i]"."[$j]";
            }
        }
    }
    return $max . " là lớn nhất vị trí ". $index;
}
echo check_max($arr);