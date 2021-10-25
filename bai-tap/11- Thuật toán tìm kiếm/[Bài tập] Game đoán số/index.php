
<?php
session_start();
include_once "Start.php";
if ($_SERVER['REQUEST_METHOD'] == 'GET') {

    if (isset($_REQUEST["left"])) {
        left();
    } elseif (isset($_REQUEST["right"])) {
        right();
    } elseif (isset($_REQUEST["win"])) {
        echo "You're Right";
    } elseif (isset($_REQUEST["start"])) {
        start();
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
<form action="" method="get">
    <table>
        <tr>
            <td><p>Is your number <?php
                    echo $_SESSION['mid']; ?></p></td>
        </tr>
        <tr>
            <td>
                <input type="submit" value="Lower" name="left">
            </td>
            <td>
                <input type="submit" value="Higher" name="right">
            </td>
            <td>
                <input type="submit" value="Correct" name="win">
            </td>
            <td>
                <input type="submit" value="Start" name="start">
            </td>
        </tr>
    </table>
</form>
</body>
</html>