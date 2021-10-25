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
    <label for="name">Kiểm tra Account: <br></label>
    <input type="text" name="name" id="name" placeholder="">
    <button>Check</button>

</form>
</body>
</html>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_REQUEST["name"];
    checkName($name);
}
function checkName($name)
{
    $regexp = '/^[_a-z0-9]{6,}$/';
    if (preg_match($regexp, $name)) {
        echo "<p style='color: blue'>Là hợp lệ</p>";
    } else {
        echo "<p style='color: red'>Không hợp lệ</p>";
    }
}

?>