<?php

/*
 * Circle
 * + $radius: int
 * +$color: string
 * __construct($radius,$color)
 * +getRadius()
 * +getColor()
 * +setRadius()
 * +setColor()
 * +getArea()
 * +toString()
 */

class Circle
{
    public int $radius;
    public string $color;

    public function __construct($radius, $color)
    {
        $this->radius = $radius;
        $this->color = $color;
    }

    /**
     * @return int
     */
    public function getRadius(): int
    {
        return $this->radius;
    }

    /**
     * @return string
     */
    public function getColor(): string
    {
        return $this->color;
    }

    /**
     * @param int $radius
     */
    public function setRadius(int $radius): void
    {
        $this->radius = $radius;
    }

    /**
     * @param string $color
     */
    public function setColor(string $color): void
    {
        $this->color = $color;
    }

    public function getArea()
    {
        return pow($this->radius, 2) * 3.14;
    }

    public function toString()
    {
        echo "Radius: " . $this->radius . "<br>";
        echo "Color: " . $this->color . "<br>";
    }
}