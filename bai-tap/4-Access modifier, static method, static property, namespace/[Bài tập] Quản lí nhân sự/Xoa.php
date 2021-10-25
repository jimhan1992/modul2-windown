<?php
include_once "function.php";
$xoa = $_REQUEST["xoa"];
$arr = lay_du_lieu();
array_splice($arr, $xoa, 1);

function luu($arr)
{
    $arr = json_encode($arr);
    file_put_contents("Employee.json",$arr);
}
luu($arr);
header("Location: hien_thi.php");

