<?php
include_once("Point2D.php");
include_once("Point3D.php");
$point2d = new Point2D(10, 20);
echo "X= " . $point2d->getX();
echo "<br>";
echo "Y= " . $point2d->getY();
echo "<br>";
var_dump($point2d->getXY());
$point3d = new Point3D(20, 30, 40);
echo "<br>";
echo "X= " . $point3d->getX();
echo "<br>";
echo "Y= " . $point3d->getY();
echo "<br>";
echo "Z= " . $point3d->getZ();
echo "<br>";
var_dump($point3d->getXYZ());

