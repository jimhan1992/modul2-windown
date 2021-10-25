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

    <h1>Phân loại đầu số</h1>
    <label>
        <textarea name="input" rows="5" cols="20" placeholder="0395182349,0356229285,0343794114"></textarea>
    </label>
    <br>
    <input type="submit" value="Phân loại">

</form>
</body>
</html>
<?php
include_once "check.php";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $input = $_POST["input"];
    $arr = explode(',', $input);
    $viet_tell = [];
    $mobi_fone = [];
    $vina_phone = [];
    foreach ($arr as $value) {
        if (check_phone($value) == 1) {
            array_push($viet_tell, $value);
        } elseif (check_phone($value) == 2) {
            array_push($vina_phone, $value);
        } elseif (check_phone($value) == 3) {
            array_push($mobi_fone, $value);
        }
    }
    echo "<br>Viettell: <br>";
    print_r($viet_tell);
    echo "<br>MobiFone: <br>";
    print_r($mobi_fone);
    echo "<br>VinaPhone: <br>";
    print_r($vina_phone);
}
?>