<?php
class Triangle extends Shape {
    public float $side1;
    public float $side2;
    public float $side3;

    public function __construct()
    {
        $this->side1 = 1.0;
        $this->side2 = 1.0;
        $this->side3 = 1.0;
    }

    /**
     * @return float
     */
    public function getSide1(): float
    {
        return $this->side1;
    }

    /**
     * @param float $side1
     */
    public function setSide1(float $side1): void
    {
        $this->side1 = $side1;
    }

    /**
     * @return float
     */
    public function getSide2(): float
    {
        return $this->side2;
    }

    /**
     * @param float $side2
     */
    public function setSide2(float $side2): void
    {
        $this->side2 = $side2;
    }

    /**
     * @return float
     */
    public function getSide3(): float
    {
        return $this->side3;
    }

    /**
     * @param float $side3
     */
    public function setSide3(float $side3): void
    {
        $this->side3 = $side3;
    }
    public function getArea(){
        $p=$this->side1+$this->side2+$this->side3;
        return sqrt($p*($p-$this->side1)*($p-$this->side2)*($p-$this->side3));
    }
    public function getPerimeter(){
        return $this->side1+$this->side2+$this->side3;
    }
    public function toString(){
        return 'Side1: '.$this->side1.', Side2: '.$this->side2.', Side3: '.$this->side3.'<br>'.'Area: '.$this->getArea().'<br>'.' Perimeter: '.$this->getPerimeter().'<br>';
    }
}