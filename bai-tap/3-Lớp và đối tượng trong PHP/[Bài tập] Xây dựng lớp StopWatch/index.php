<?php
include 'StopWatch.php';
include 'selectionSort.php';

$newStopWatch = new StopWatch();
$newArray = [];
for ($i = 0; $i < 33000; $i++) {
    array_push($newArray, rand(1, 10000));
}

$newStopWatch->start();
selection_sort($newArray);
$newStopWatch->stop();

echo 'Time to do the Selection Sort is: ' . $newStopWatch->getElapsedTime();