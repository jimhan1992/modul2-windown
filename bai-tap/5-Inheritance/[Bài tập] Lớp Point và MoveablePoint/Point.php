<?php

class Point
{
    public float $x;
    public float $y;

    public function __construct(float $x, float $y)
    {
        $this->x = $x;
        $this->y = $y;
    }

    public function getX()
    {
        return $this->x;
    }

    public function getY()
    {
        return $this->y;
    }

    public function setX(float $x)
    {
        $this->x = $x;
    }

    public function setY(float $y)
    {
        $this->y = $y;
    }

    public function getXY()
    {
        return $arr = [$this->x, $this->y];
    }

    public function toString()
    {
        echo "X= " . $this->x . "<br>";
        echo "Y= " . $this->y . "<br>";
    }
}