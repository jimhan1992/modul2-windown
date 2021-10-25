<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>[Bài tập] Hiển thị thông báo nếu người dùng nhập số bất hợp lệ</title>
</head>
<body>

<?php
$x = '';
$y = '';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $x = $_POST["x"];
    $y = $_POST["y"];
}
?>
<?php
function calculate($a, $b)
{
    try {
        if ($b == 0) {
            throw new Exception("Xảy ra ngoại lệ:/by zero");
        }
        echo "<br>Tổng là: " . ($a + $b);
        echo "<br>Hiệu là: " . ($a - $b);
        echo "<br>Tích là: " . ($a * $b);
        echo "<br>Thương là: " . ($a / $b);
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}

?>
<form action="" method="post">
    <fieldset style="width: 400px">
        <legend>Calculate</legend>
        <label for="x">Number1</label><br>
        <input type="number" name="x" id="x" value="<?php echo $x; ?>">
        <br>
        <label for="y">Number2</label><br>
        <input type="number" name="y" id="y" value="<?php echo $y; ?>">
        <input type="submit" value="calculate">
    </fieldset>
</form>
<?php
echo calculate($x, $y);
?>

</body>
</html>