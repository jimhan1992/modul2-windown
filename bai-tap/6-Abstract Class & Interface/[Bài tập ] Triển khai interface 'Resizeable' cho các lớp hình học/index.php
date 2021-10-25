<?php
include_once ('Circle.php');
include_once ('Rectangle.php');
include_once ('Square.php');

$circle = new Circle('Circle 01', 3);
echo 'Circle area: ' . $circle->calculateArea() . '<br />';
echo 'Circle perimeter: ' . $circle->calculatePerimeter() . '<br />';

$rectangle = new Rectangle('Rectangle 01', 3 , 4);
echo 'Rectangle area: ' . $rectangle->calculateArea() . '<br />';
echo 'Rectangle perimeter: ' . $rectangle->calculatePerimeter() . '<br />';

$square = new Square('Square 01', 4 );
echo 'Rectangle area: ' . $square->calculateArea() . '<br />';
echo 'Rectangle perimeter: ' . $square->calculatePerimeter() . '<br />';

$arrayShape = [$circle,$rectangle,$square];
foreach ($arrayShape as $item){
    echo $item->show()."- My size is: ".$item->getSize()."<br>";
}
foreach ($arrayShape as $item){
    $item->resize(rand(1,100));
}
$arrayShape = [$circle,$rectangle,$square];
foreach ($arrayShape as $item) {
    echo $item->show() . "- My size is: " . $item->getSize() . "<br>";
}