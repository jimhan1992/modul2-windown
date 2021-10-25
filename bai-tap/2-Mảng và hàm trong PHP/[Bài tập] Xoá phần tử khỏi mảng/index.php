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
    <label for="">
        <input type="number" name="inp">
        <input type="submit" value="xóa">
    </label>
</form>
<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $a = $_POST["inp"];
    $arr = [1, 2, 3, 4, 5, 6, 7, 8, 9];
    for ($i = 0; $i < count($arr); $i++) {
        if ($arr[$i] == $a) {
            array_splice($arr, $i, 1);
            array_push($arr, 0);
        }
    }
    echo "Mảng đã xóa ".implode(",",$arr);
}
?>

</body>
</html>