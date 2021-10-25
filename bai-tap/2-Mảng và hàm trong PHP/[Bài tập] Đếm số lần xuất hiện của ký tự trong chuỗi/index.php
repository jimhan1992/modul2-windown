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
    <label for="dem">Tìm số lần xuất hiện trong chuỗi: </label><br>
    <input type="text" name="dem" id="dem">
    <input type="submit" value="Tìm">
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $dem = $_POST["dem"];
    $chuoi = "q w e r t yu u io a s d f g h j k l z x c v b n m HTML is the standard markup language for Web pages";
    $count = 0;
    for($i=0; $i<strlen($chuoi);$i++){
        if($dem == $chuoi[$i]){
            $count++;
        }
    }
    echo $count;
}
?>
</body>
</html>