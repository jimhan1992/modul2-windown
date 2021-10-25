<?php
$arr = [9, 9, 5, 3, 6, 4, 55, 55, 1, 55, 25,];
$min = $arr[0];
for ($i = 0; $i < count($arr); $i++) {
    if ($min > $arr[$i]) {
        $min = $arr[$i];
    }
}
echo $min . " là giá trị nhỏ nhất";