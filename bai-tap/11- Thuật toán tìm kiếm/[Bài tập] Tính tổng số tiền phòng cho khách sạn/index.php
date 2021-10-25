<?php
$arr = [
    [0, 1, 0, 0],
    [0, 5, 0, 0],
    [2, 0, 3, 3]
];
$sum=0;
for ($i=0;$i<count($arr[0]);$i++){
    for ($j=0;$j<count($arr);$j++){
        if($arr[$j][$i]==0){
            break;
        }
        $sum+=$arr[$j][$i];
    }
}
echo $sum;