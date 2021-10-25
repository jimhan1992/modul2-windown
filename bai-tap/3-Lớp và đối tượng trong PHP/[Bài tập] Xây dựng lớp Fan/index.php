<?php
include 'Fan.php';

$fan1 = new Fan(3, true, 10, "yellow");
echo $fan1->toString();
echo '<br>';
$fan2 = new Fan();
echo $fan2->toString();