<?php
include_once "Dancer.php";
$nam = new SplQueue();
$nu = new SplQueue();

$nam->enqueue(new Dancer('Hảo', 'male'));
$nam->enqueue(new Dancer('Hán', 'male'));
$nam->enqueue(new Dancer('Ca', 'male'));
$nam->enqueue(new Dancer('Si', 'male'));
$nam->enqueue(new Dancer('Tình', 'male'));

$nu->enqueue(new Dancer('Xuân', 'female'));
$nu->enqueue(new Dancer('Hạ', 'female'));
$nu->enqueue(new Dancer('Thu', 'female'));
$nu->enqueue(new Dancer('Đông', 'female'));

$ban_nhay = [];
$nam_cho = [];
$nu_cho = [];
while (!$nu->isEmpty() || !$nam->isEmpty()) {
    if (!$nu->isEmpty() && !$nam->isEmpty()) {
        $ban_nhay[] = $nam->dequeue()->name . ' - ' . $nu->dequeue()->name;

    } else if ($nu->isEmpty() && !$nam->isEmpty()) {
        $nam_cho[] = $nam->dequeue()->name;
    } else if (!$nu->isEmpty() && $nam->isEmpty()) {
        $nu_cho[] = $nu->dequeue()->name;

    }
}
echo '<pre>';
echo "Bạn Nhảy: <br>";
print_r($ban_nhay);
echo "Hàng đợi Nam: <br>";
print_r($nam_cho);
echo "Hàng đợi Nữ: <br>";
print_r($nu_cho);
echo '</pre>';