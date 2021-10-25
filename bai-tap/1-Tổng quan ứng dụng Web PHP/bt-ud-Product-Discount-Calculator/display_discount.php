<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $mo_ta = $_POST['mo_ta'];
    $gia = $_POST['gia'];
    $phan_tram = $_POST['phan_tram'];
    $luong_chiet_khau = ($gia * $phan_tram)/100;
    $gia_da_chiet_khau = $gia - $luong_chiet_khau;
    echo "Product Description: " . $mo_ta . "<br>";
    echo "List Price: " . $gia . "<br>";
    echo "Discount Percent: " . $phan_tram . "<br>";
    echo "Discount Amount: " . $luong_chiet_khau . "<br>";
    echo "Discount Price: " . $gia_da_chiet_khau . "<br>";
    echo "<br><button><a href='index.php'>HOME</a></button>";
}