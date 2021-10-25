<?php
include_once "Patient.php";
include_once "Queue.php";

$patientQueue = new Queue();
//hiển thị danh sách khám
echo $patientQueue->toString() . "<br>";
//thêm bệnh nhân
$patientQueue->enqueue("Smith", 5);
$patientQueue->enqueue("Jones", 4);
$patientQueue->enqueue("Fehrenbach", 6);
$patientQueue->enqueue("Brown", 1);
$patientQueue->enqueue("Ingram", 1);
//bệnh nhân vượt quá giói hạn nên ko đc thêm vào
$patientQueue->enqueue("Paul", 4);
echo "<br>";
// hiện danh sách bệnh nhân hiện có
echo "PATIENT LIST QUEUE <br>";
var_dump($patientQueue->toString());
echo "<br>";

echo "The patient was examined<br>";
var_dump($patientQueue->dequeue());
echo "<br>";

var_dump($patientQueue->dequeue());
echo "<br>";

echo "PATIENT LIST QUEUE <br>";
var_dump($patientQueue->toString());
echo "<br>";
