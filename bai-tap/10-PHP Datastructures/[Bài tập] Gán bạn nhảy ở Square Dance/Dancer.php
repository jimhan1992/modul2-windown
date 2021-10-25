<?php

class Dancer extends SplQueue
{
    public $name;
    public $gender;

    public function __construct($name, $gender)
    {
        $this->name = $name;
        $this->gender = $gender;

    }
}