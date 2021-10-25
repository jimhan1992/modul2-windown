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
    <label>
        <input type="text" name="number">
    </label>
    <select name="change" id="">
        <option value="decimal">Decimal</option>
        <option value="binary">Binary</option>
    </select>
    <label for=""></label><select name="change1" id="">
        <option value="decimal">Decimal</option>
        <option value="binary">Binary</option>
    </select>
    <button>SUBMIT</button>
</form>

</body>
</html>
<?php
include_once "Stack.php";

if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    if (isset($_REQUEST['number'])) {
        $number = $_REQUEST['number'];
        $change = $_REQUEST['change'];
        $change1 = $_REQUEST['change1'];

        if($number!=""){
            if ($change === $change1) {
                echo $number;
            } else if ($change === "decimal" && $change1 === "binary") {
                convertDecimalToBinary($number);
            } else if ($change === "binary" && $change1 === "decimal") {
                convertBinaryToDecimal($number);
            }
        }else{
            echo "<br> mời bố nhập vào hộ con";
        }
    }

}
function convertBinaryToDecimal($number)
{
    $n = strlen($number);//lấy chiều dài string
    $display = 0;
    for ($i = 0; $i < $n; $i++) {
        $j = substr($number, $i, 1);//lấy kí tự của string
        $display += $j * pow(2, $n-1-$i);
    }
    echo $display;
}

function convertDecimalToBinary($number)
{
    $stack = new Stack(100);
    while ($number / 2 != 0) {
        $mod = $number % 2;
        $stack->push($mod);
        $number = floor($number / 2);
    }
    $str = "";
    $count = count($stack->stack);
    for ($i = 0; $i < $count; $i++) {
        $str = $str . $stack->pop();
    }
    echo $str;
}