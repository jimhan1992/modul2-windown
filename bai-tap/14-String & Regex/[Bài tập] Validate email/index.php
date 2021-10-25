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
    Kiểm tra Email hợp lệ: <br>
    <label>
        <input type="email" name="email" placeholder="Nhập email">
    </label>
    <button>Check</button>
</form>
</body>
</html>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_REQUEST["email"];
    checkEmail($email);
}
function checkEmail($str){
    $regexp = '/^[A-Za-z0-9]+[A-Za-z0-9]*@[A-Za-z0-9]+(\.[A-Za-z0-9]+)$/';
    if (preg_match($regexp, $str)) {
        echo("<p style='color: red'>Là Email hợp lệ</p>");
    } else {
        echo("<p style='color: red'>Không phải Email hợp lệ</p>");
    }
}
?>
