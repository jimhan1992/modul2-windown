<?php
if ($_SERVER["REQUEST_METHOD"]== "POST") {
    $name = $_REQUEST["name"];
    $password = $_REQUEST["password"];
    $email = $_REQUEST["email"];
    $phone = $_REQUEST["phone"];
    $patternName = "/^[A-Za-z0-9]{3,}$/";//tối thiểu 3 ký tự
    $patternPassword = "/^(?=.*[A-Za-z])(?=.*\d)(?=.*[@$!%*#?&])[A-Za-z\d@$!%*#?&]{8,}$/";//ít nhất một chữ cái, một số và một ký tự đặc biệt,tối thiểu tám ký tự
    $patternEmail = "/^[A-Za-z0-9]+[A-Za-z0-9]*@[A-Za-z0-9]+(\.[A-Za-z0-9]+)$/";
    $patternPhone = "/^[0][0-9]{9}$/";
    $error = true;
    if (!preg_match($patternName, $name)) {
        echo("<p style='color: red'>Tên tối thiểu 3 ký tự</p>");
        $error = false;
    }
    if (!preg_match($patternPassword,$password )) {
        echo("<p style='color: red'>Password phải có ít nhất một chữ hoa, một số và một ký tự đặc biệt,tối thiểu tám ký tự </p>");
        $error = false;
    }
    if (!preg_match($patternEmail, $email)) {
        echo("<p style='color: red'>Không phải Email hợp lệ</p>");
        $error = false;
    }
    if (!preg_match($patternPhone, $phone)) {
        echo("<p style='color: red'>Không phải số phone hợp lệ</p>");
        $error = false;
    }
    if($error){
        echo "Đăng Ký Thành Công";
    }
}
?>
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
    <fieldset style="width: 250px; margin: auto">
        <legend>Đăng Ký</legend>
        <label for="name">Tên: <br></label>
        <input type="text" name="name" id="name" placeholder="Jimhan1992">
        <label for="password"><br>Password:<br></label>
        <input type="text" name="password" id="password" placeholder="DaylaMatKhau@92">
        <label for="email"><br>Email:<br></label>
        <input type="text" name="email" id="email" placeholder="tranhan1992@gmail.com">
        <label for="phone"><br>Phone:<br></label>
        <input type="text" name="phone" id="phone" placeholder="0977460093">
        <br><br>
        <button>Đăng ký</button>
    </fieldset>
</form>
</body>
</html>
