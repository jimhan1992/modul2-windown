<?php

include "Stack.php";

$stack = new Stack();

$array = [165, 4, 6, 8, 213, 43, 542, 35];

for ($i = 0; $i < count($array); $i++) {
    $stack->push($array[$i]);
}

$reverseArray = [];
while (!$stack->isEmpty()) {
    array_push($reverseArray, $stack->pop());
}

foreach ($array as $value) {
    echo $value . " ";
}
echo "<br>";

foreach ($reverseArray as $value) {
    echo $value . " ";
}