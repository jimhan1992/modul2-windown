<?php
include_once "Employee.php";
function lay_du_lieu()
{
    $lay = file_get_contents("Employee.json");
    return json_decode($lay, true);
}

function gui_du_lieu($arr)
{
    $data = lay_du_lieu();
    array_push($data, $arr);
    $gui = json_encode($data, JSON_PRETTY_PRINT);
    file_put_contents("Employee.json", $gui);
}
