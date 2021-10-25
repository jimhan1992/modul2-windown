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
<form action="" method="POST">
    <label>
        <input type="text" name="input"/>
    </label>
    <label>
        <select name="mode">
            <option value="USD">VND to USD</option>
            <option value="VND">USD to VND</option>
        </select>
    </label>

    <input type="submit" value="Exchange"/>

</form>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $input = $_POST['input'];
    $mode = $_POST['mode'];
    switch ($mode) {
        case 'USD':
            $output = $input / 23000;
            break;
        case 'VND':
            $output = $input * 23000;
            break;
    }
    echo "<br> $input  =  $output $mode";
} else {
    echo "Error input";
}
?>
</body>
</html>