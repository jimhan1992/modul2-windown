<?php
include_once("Circle.php");
include_once("Cylinder.php");
$circle = new Circle(12, "blue");
$cylinder= new Cylinder(12,"red",20);
echo " Circle: ". "<br>";
$circle->toString();
echo "Area: " . $circle->getArea() . "<br>";
echo  "<br>". "<br>";
echo " Cylinder: ". "<br>";
$cylinder->toString();