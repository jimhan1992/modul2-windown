<?php
include "Queue.php";
include "Stack.php";

const FALSE_MESSAGE = "Asymmetrical String";
const TRUE_MESSAGE = "Symmetrical String";

function checkSymmetry($string): string
{

    $stack = new Stack();
    $queue = new Queue();

    for ($i = 0; $i < strlen($string); $i++) {
        $stack->push(substr($string, $i, 1));
        $queue->enqueue(substr($string, $i, 1));
    }

    while (!$queue->isEmpty()) {
        if ($stack->pop() != $queue->dequeue()) {
            return FALSE_MESSAGE;
        }
    }
    return TRUE_MESSAGE;
}

$test1 = "able was I ere I saw elba";
$test2 = "12345432102";
$test3 = "12345654321";

echo checkSymmetry($test1);
echo "<br>";
echo checkSymmetry($test2);
echo "<br>";
echo checkSymmetry($test3);