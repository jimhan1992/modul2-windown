<?php

use JetBrains\PhpStorm\Pure;

class QuadraticEquation
{
    private int $a;
    private int $b;
    private int $c;

    function __construct($a, $b, $c)
    {
        $this->a = $a;
        $this->b = $b;
        $this->c = $c;
    }

    /**
     * @return int
     */
    public function getA(): int
    {
        return $this->a;
    }


    /**
     * @return int
     */
    public function getB(): int
    {
        return $this->b;
    }

    /**
     * @return int
     */
    public function getC(): int
    {
        return $this->c;
    }

    #[Pure] function getDiscriminant(): float|int
    {
        return pow($this->getB(), 2) - (4 * ($this->getA() * $this->getC()));
    }

    #[Pure] function getRoot1(): float|int
    {
        return -($this->getB() + sqrt(pow($this->getB(), 2) - 4 * ($this->getA() * $this->getC()))) / 2 * $this->getA();
    }

    #[Pure] function getRoot2(): float|int
    {
        return -($this->getB() - sqrt(pow($this->getB(), 2) - 4 * ($this->getA() * $this->getC()))) / 2 * $this->getA();
    }

    function inKQ()
    {
        $check = $this->getDiscriminant();
        if ($check > 0) {
            echo "có 2 nghiệm: X1 = " . $this->getRoot1() . ", X2 = " . $this->getRoot2();
        }
        if ($check == 0) {
            echo "có nghiệm kép: X1=X2 = " . -$this->getB()/2*($this->getA());
        }
        if ($check < 0) {
            echo "The equation has no roots";
        }
        echo "<br>";
    }
}