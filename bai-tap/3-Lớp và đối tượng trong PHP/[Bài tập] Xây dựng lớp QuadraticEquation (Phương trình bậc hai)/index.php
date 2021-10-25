<!--
    QuadraticEquation
    ------------------
    - $a: int
    - $b: int
    - $c: int
    ------------------
    + getNumberA(): float
    + getNumberB(): float
    + getNumberC(): float
    + getDiscriminant(): float
    + getRoot1(): float
    + getRoot2(): float
-->

<?php
include_once "QuadraticEquation.php";
$qua = new QuadraticEquation(1,2,3);
$qua->inKQ();
$qua1 = new QuadraticEquation(1,2,1);
$qua1->inKQ();
$qua3 = new QuadraticEquation(1,3,1);
$qua3->inKQ();