<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Calculator</title>
</head>
<body>
<h1>Simple Calculator</h1>
<form action="" method="post">
    <fieldset style="width: 400px">
        <legend>Calculator</legend>
        <table>
            <tr>
                <td><label for="first">Fist operand:</label></td>
                <td><input type="number" id="first" name="first"></td>
            </tr>
            <tr>
                <td>Operator:</td>
                <td>
                    <label>
                        <select name="calculator">
                            <option value="cong">addition</option>
                            <option value="tru">subtraction</option>
                            <option value="nhan">multiplication</option>
                            <option value="chia">division</option>
                        </select>
                    </label>
                </td>
            </tr>
            <tr>
                <td><label for="second">Second operand:</label></td>
                <td><input type="number" id="second" name="second"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="Calculator"></td>
            </tr>
        </table>
    </fieldset>
</form>
<h2>Result:</h2>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $first = $_POST["first"];
    $second = $_POST["second"];
    $calculator = $_POST["calculator"];
    if ($calculator == "cong") {
        $result = $first + $second;
        echo $result;
    }
    if ($calculator == "tru") {
        $result = $first - $second;
        echo $result;
    }
    if ($calculator == "nhan") {
        $result = $first * $second;
        echo $result;
    }
    if ($calculator == "chia") {
        if ($second == '0') {
            echo "Mẫu số không thể bằng 0";
        } else {
            $result = $first / $second;
            echo $result;
        }
    }
}
?>
</body>
</html>
