<?php

class Country
{
    public string $name;
    public int $totalGoldMedals;

    /**
     * @param $name
     * @param $totalGoldMedals
     */
    public function __construct($name, $totalGoldMedals)
    {
        $this->name = $name;
        $this->totalGoldMedals = $totalGoldMedals;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName(mixed $name): void
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getTotalGoldMedals(): mixed
    {
        return $this->totalGoldMedals;
    }

    /**
     * @param mixed $totalGoldMedals
     */
    public function setTotalGoldMedals($totalGoldMedals): void
    {
        $this->totalGoldMedals = $totalGoldMedals;
    }
    public function readData(){
        echo 'Country: '.$this->name.' Number of gold medals: '.$this->totalGoldMedals.'<br>';
    }

}