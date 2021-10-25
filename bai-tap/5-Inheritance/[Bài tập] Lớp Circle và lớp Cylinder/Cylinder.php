<?php

use JetBrains\PhpStorm\Pure;

class Cylinder extends Circle
{
    public int $height;

    #[Pure] public function __construct(int $radius, string $color, $height)
    {
        parent::__construct($radius, $color);
        $this->height = $height;
    }

    #[Pure] public function getCylindricalVolume(): float|int
    {
        return parent::getArea() * $this->height;
    }

    public function toString()
    {
        parent::toString();
        echo "Height: " . $this->height . "<br>";
        echo "Thể Tích Hình Trụ: " . $this->getCylindricalVolume() . "<br>";

    }
}