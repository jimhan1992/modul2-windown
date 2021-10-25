<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="" method="post">
    <label for="inp">Nhập mảng bất kì: </label><br>
    <p>Các phần tử cách nhau bằng dấu ","</p>
    <input type="text" id="inp" name="arr" placeholder="vd: 5,8,6,7,3,2"><br>
    <input type="submit" value="Tìm vị trí phần tử nhỏ nhất">
</form>

<?php
//$arr = [9,5,5,8,9,3,4,7,5];
function check_min($arr): int
{
    $min = $arr[0];
    $index = 0;
    for ($i = 1; $i < count($arr); $i++) {
        if ($arr[$i] < $min) {
            $min = $arr[$i];
            $index = $i;
        }
    }
    return $index;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $arr = explode(',', $_POST["arr"]);
    echo check_min($arr);
}
?>
</body>
</html>
