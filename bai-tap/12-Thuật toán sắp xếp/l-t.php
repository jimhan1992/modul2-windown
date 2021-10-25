<?php
//Sắp xếp nổi bọt
$myArr = [1, 1, 7, 6, 5, 4, 3, 2, 1, 3, 2, 1];
$count = count($myArr);
for ($i = 0; $i < $count; $i++) {
    for ($j = 0; $j < $count - $i - 1; $j++) {
        if ($myArr[$j] > $myArr[$j + 1]) {
            $temp = $myArr[$j + 1];
            $myArr[$j + 1] = $myArr[$j];
            $myArr[$j] = $temp;
        }
    }
}
for ($i = 0; $i < $count; $i++) {
    echo $myArr[$i] . " ";
}


//Sắp xếp chèn
echo "<br>";

function insertionSort($myArray): array
{
    for ($i = 0; $i < count($myArray); $i++) {
        $val = $myArray[$i];
        $j = $i - 1;
        while ($j >= 0 && $myArray[$j] > $val) {
            $myArray[$j + 1] = $myArray[$j];
            $j--;
        }
        $myArray[$j + 1] = $val;
    }
    return $myArray;
}

$array = array(3, 0, 2, 5, -1, 4, 1);
echo "Original Array :\n";
echo implode(', ', $array);
echo "<br>";
echo "\nSorted Array :\n";
print_r(insertionSort($array));



//Sắp xếp chọn
//Các bước thực hiện
//Bước 1: i=1
//Bước 2: Tìm phần tử a[min] nhỏ nhất trong dãy hiện hành từ a[i] đến a[n]
//Bước 3: Hoán vị a[min] và a[i]
//Bước 4: Nếu i<=n-1 thì i=i+1; Lặp lại bước 2
//Ngược lại: Dừng. n-1 phần tử đã nằm đúng vị trí.

function selectionSort($array)
{
    for ($i = 0; $i < count($array) - 1; $i++) {
        $min = $i;
        for ($j = $i + 1; $j < count($array); $j++) {
            if ($array[$j] < $array[$min]) {
                $min = $j;
            }
        }
        $array = swapPositions($array, $i, $min);
    }
    return $array;
}

function swapPositions($data, $left, $right)
{
    $backupOldDataRightValue = $data[$right];
    $data[$right] = $data[$left];
    $data[$left] = $backupOldDataRightValue;
    return $data;
}

$myArray = [3, 0, 2, 5, -1, 4, 1];
echo "Original Array :\n";
echo implode(', ', $myArray);
echo "<br>";
echo "\nSorted Array :\n";
echo implode(', ', selectionSort($myArray));


