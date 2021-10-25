<?php
include_once ("Point.php");
include_once ("MoveablePoint.php");
$point=new Point(10,10);
echo "Point:<br> ";
$point->toString();
$move=new MoveablePoint(15,120,15,20);
echo "Move able Point: <br> ";
$move->toString();
$move->move();