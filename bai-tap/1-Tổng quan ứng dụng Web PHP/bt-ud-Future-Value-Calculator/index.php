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
    <fieldset style="width: 100px">
    <label for="input">Inventment Amount:</label>
    <input type="number" name="input" id="input" placeholder="Lượng tiền đầu tư ban đầu"> <br>
    <label for="rate">Yearly Interest Rate:</label>
    <input type="number" name="rate" id="rate" placeholder="Lãi suất năm"><br>
    <label for="year">Number of Years: </label>
    <input type="number" name="year" id="year" placeholder="Số năm đầu tư"><br>
    <input type="submit" id="submit" value="Calculate">
    </fieldset>
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $input = $_POST['input'];
    $rate = $_POST['rate'];
    $year = $_POST['year'];
    for ($i = 0; $i < $year; $i++) {
        $input = $input + ($input * $rate / 100);
    }
    echo "<p>Lãi suất tương lai của bạn là: " . $input . "</p>";
}
?>
</body>
</html>