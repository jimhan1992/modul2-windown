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
    Kiểm tra tên lớp học hợp lệ: <br>
    <label>
        <input type="text" name="phone" placeholder="vd: (xx)-0xxxxxxxx">
    </label>
    <button>Check</button>
</form>
</body>
</html>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $phone = $_REQUEST["phone"];
    checkEmail($phone);
}
function checkEmail($str){
    $regexp = '/^[(][0-9]{2}[)]-[0][0-9]{9}$/';
    if (preg_match($regexp, $str)) {
        echo("<p style='color: blue'>Là hợp lệ</p>");
    } else {
        echo("<p style='color: red'>Không hợp lệ</p>");
    }
}
?>
