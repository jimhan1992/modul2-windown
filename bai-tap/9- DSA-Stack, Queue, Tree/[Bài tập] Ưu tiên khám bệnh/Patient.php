<?php

class Patient
{
    public string $name;
    public int $code;

    public function __construct($name, $code)
    {
        $this->name = $name;
        $this->code = $code;
    }


    public function getName(): string
    {
        return $this->name;
    }


    public function setName($name): void
    {
        $this->name = $name;
    }

    public function getCode(): int
    {
        return $this->code;
    }

    public function setCode($code): void
    {
        $this->code = $code;
    }
}