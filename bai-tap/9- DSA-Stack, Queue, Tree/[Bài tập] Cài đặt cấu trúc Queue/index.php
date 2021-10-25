<?php
include_once "Node.php";
include_once "Queue.php";
$name = new Queue();
$name->enqueue("Trần Hảo");
$name->enqueue("Trần Hán");
$name->enqueue("Trần Ca");
$name->dequeue();
$name->dequeue();
echo $name->isEmpty();
$name->enqueue("Trần bắt");
$name->enqueue("Trần ma");
$name->dequeue();
$name->dequeue();
$name->dequeue();
echo $name->isEmpty();