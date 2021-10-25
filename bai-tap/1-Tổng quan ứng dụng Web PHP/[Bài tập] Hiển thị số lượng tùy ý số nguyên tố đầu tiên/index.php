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
    <label for="so_nt"> Số nguyên tố muốn hiển thị: <br></label>
    <input type="number" name="so_nt" id="so_nt" placeholder="Nhập">
    <input type="submit" value="In">
</form>
<?php
function check_snt($n)
{
    if ($n < 2) {
        return false;
    }
    for ($i = 2; $i <= sqrt($n); $i++) {
        if ($n % $i == 0) {
            return false;
        }
    }
    return true;
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $a = $_POST['so_nt'];
    $count = 0;
    $i = 2;
    $result = $a . ' số NT đầu tiên là: ';
    while ($count < $a) {
        if (check_snt($i)) {
            $result .= $i . " ";
            $count++;
        }
        $i++;
    }
    echo $result;
}
?>
</body>
</html>