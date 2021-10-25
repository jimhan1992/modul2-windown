<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>[Bài tập] Hiển thị các loại hình</title>
</head>
<body>
<form action="" method="post">
    <label>
        <select name="print">
            <option value="rectangle">rectangle</option>
            <option value="square_triangle">square triangle</option>
            <option value="isosceles_triangle">isosceles triangle</option>
        </select>
        <input type="submit" id="submit" value="Exit">
    </label>
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $print = $_POST['print'];
    if ($print == "rectangle") {
        for ($i = 0; $i < 3; $i++) {
            for ($j = 0; $j < 7; $j++) {
                echo "*";
            }
            echo "<br>";
        }
    }
    if ($print == "square_triangle") {
        for ($i = 1; $i <= 5; $i++) {
            for ($j = 0; $j < $i; $j++) {
                echo "*";
            }
            echo "<br>";
        }

        echo "<br>";
        for ($i = 1; $i <= 5; $i++) {
            for ($j = $i; $j <= 5; $j++) {
                echo "*";
            }
            echo "<br>";
        }
        echo "<br>";
        for ($i = 0; $i <= 5; $i++) {
            for ($j = 4; $j >= $i; $j--) {
                echo '&ensp;';
            }
            for ($j = 1; $j <= $i; $j++) {
                echo '*';
            }
            echo '<br>';
        }
        echo "<br>";

        for ($i = 1; $i <= 5; $i++) {
            for ($j = 1; $j < $i; $j++) {
                echo '&ensp;';
            }
            for ($j = 5; $j >= $i; $j--) {
                echo '*';
            }
            echo "<br>";
        }
    }
}
?>
</body>
</html>