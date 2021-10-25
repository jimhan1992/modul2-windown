<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>[Bài tập] Ứng dụng đọc số thành chữ</title>
</head>
<body>
<form action="" method="post">
    <label>
        <input type="number" name="numberInput" placeholder="Nhập số cần đọc">
        <input type="submit" id="submit" value="đọc">
    </label>
</form>
<?php

use JetBrains\PhpStorm\Pure;

$convertString = "";
function speakWords()
{
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $numberInput = $_POST["numberInput"];
        if ($numberInput < 0 || $numberInput >= 1000) {
            $convertString = "OUT OF ABILITY";
            echo $convertString;
        }
        switch (true) {
            case $numberInput < 10:
                return count0to9($numberInput);
            case $numberInput < 20:
                return count10to19($numberInput);
            case $numberInput < 100:
                if ($numberInput % 10 == 0) {
                    $convertString = countTens($numberInput);
                    return $convertString;
                } else {
                    $convertString = countTens($numberInput) . " " . count0to9($numberInput % 10);
                    return $convertString;
                }
            case $numberInput % 100 == 0:
                $convertString = count0to9(floor($numberInput / 100)) . " Hundred";
                return $convertString;
            default:
                $convertString = count0to9(floor($numberInput / 100)) . " Hundred " . countTens($numberInput % 100)
                    . " " . count0to9($numberInput % 100 % 10);
                return $convertString;
        }
    }
}

echo speakWords();


function count0to9($number)
{
    $result = "";

    switch ($number) {
        case 0:
            $result = "Zero";
            return $result;
        case 1:
            $result = "One";
            return $result;
        case 2:
            $result = "Two";
            return $result;
        case 3:
            $result = "Three";
            return $result;
        case 4:
            $result = "Four";
            return $result;
        case 5:
            $result = "Five";
            return $result;
        case 6:
            $result = "Six";
            return $result;
        case 7:
            $result = "Seven";
            return $result;
        case 8:
            $result = "Eight";
            return $result;
        case 9:
            $result = "Nine";
            return $result;
    }
}

#[Pure] function count10to19($number): string
{
    $ones = $number % 10;
    switch ($ones) {
        case 0:
            $result = "Ten";
            return $result;
        case 1:
            $result = "Eleven";
            return $result;
        case 2:
            $result = "Twelve";
            return $result;
        case 3:
            $result = "Thirteen";
            return $result;
        case 4:
            $result = "Fourteen";
            return $result;
        case 5:
            $result = "Fifteen";
            return $result;
        default:
            $result = count0to9($ones) . "teen";
            return $result;
    }
}

function countTens($number)
{
    $result = "";
    $tens = floor($number / 10);
    switch ($tens) {
        case 2:
            $result = "Twenty";
            return $result;
        case 3:
            $result = "Thirty";
            return $result;
        case 4:
            $result = "Forty";
            return $result;
        case 5:
            $result = "Fifty";
            return $result;
        default:
            $result = count0to9($tens) . "ty";
            return $result;
    }
}

?>
</body>
</html>