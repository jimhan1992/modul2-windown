<?php
/*  class Fan
-------------------
 * - SLOW = 1
 * - MEDIUM = 2
 * - FAST = 3
 * - private speed(SLOW): int
 * - private on(false): boolean
 * - private radius(5): int
 * - private color("blue"): str
-------------------
 * + setter()
 * + getter()
 * + __constructor()
 * + toString(): str
*/

use JetBrains\PhpStorm\Pure;

class Fan
{
    const SLOW = 1;
    const MEDIUM = 2;
    const FAST = 3;
    private mixed $speed;
    private mixed $on;
    private mixed $radius;
    private mixed $color;


    public function __construct($speed =self::SLOW, $on = false, $radius = 5, $color = "blue")
    {
        $this->speed = $speed;
        $this->on = $on;
        $this->radius = $radius;
        $this->color = $color;
    }

    /**
     * @return int
     */
    public function getSpeed(): int
    {
        return $this->speed;
    }

    /**
     * @return string
     */
    public function getColor(): string
    {
        return $this->color;
    }

    /**
     * @return mixed
     */
    public function getRadius(): mixed
    {
        return $this->radius;
    }

    /**
     * @param bool $on
     */
    public function setOn(bool $on)
    {
        $this->on = $on;
    }

    /**
     * @param mixed $radius
     */
    public function setRadius(mixed $radius)
    {
        $this->radius = $radius;
    }

    /**
     * @param int $speed
     */
    public function setSpeed(int $speed)
    {
        $this->speed = $speed;
    }

    /**
     * @param string $color
     */
    public function setColor(string $color)
    {
        $this->color = $color;
    }

    /**
     * @return bool
     */
    public function isOn(): bool
    {
        return $this->on;
    }

    #[Pure] public function toString(): string
    {
        if ($this->isOn()) {
            return "Fan is on, speed: " . $this->getSpeed() . ", color: " . $this->getColor() . ", radius: " . $this->getRadius();
        } else
            return "Fan is off, speed: " . $this->getSpeed() . ", color: " . $this->getColor() . ", radius: " . $this->getRadius();
    }
}