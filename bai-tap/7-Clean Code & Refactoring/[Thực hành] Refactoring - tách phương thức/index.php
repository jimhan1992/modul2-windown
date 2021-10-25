<?php
include_once "Cylinder.php";

use A\Cylinder;

$cylinder = new Cylinder();
echo $cylinder->getVolume(10, 11);
