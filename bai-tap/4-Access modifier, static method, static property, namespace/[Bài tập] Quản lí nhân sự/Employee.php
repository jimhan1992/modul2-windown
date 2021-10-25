<?php

class Employee
{
    public string $ho;
    public string $ten;
    public string $ngay_sinh;
    public string $dia_chi;
    public string $c_viec;

    public function __construct($ho, $ten, $ngay_sinh, $dia_chi, $c_viec)
    {
        $this->ho = $ho;
        $this->ten = $ten;
        $this->ngay_sinh = $ngay_sinh;
        $this->dia_chi = $dia_chi;
        $this->c_viec = $c_viec;

    }

    /**
     * @return string
     */
    public function getHo(): string
    {
        return $this->ho;
    }

    /**
     * @return string
     */
    public function getTen(): string
    {
        return $this->ten;
    }

    /**
     * @return string
     */
    public function getNgaySinh(): string
    {
        return $this->ngay_sinh;
    }

    /**
     * @return string
     */
    public function getDiaChi(): string
    {
        return $this->dia_chi;
    }

    /**
     * @return string
     */
    public function getCViec(): string
    {
        return $this->c_viec;
    }

    /**
     * @param string $ho
     */
    public function setHo(string $ho): void
    {
        $this->ho = $ho;
    }

    /**
     * @param string $ten
     */
    public function setTen(string $ten): void
    {
        $this->ten = $ten;
    }

    /**
     * @param string $ngay_sinh
     */
    public function setNgaySinh(string $ngay_sinh): void
    {
        $this->ngay_sinh = $ngay_sinh;
    }

    /**
     * @param string $dia_chi
     */
    public function setDiaChi(string $dia_chi): void
    {
        $this->dia_chi = $dia_chi;
    }

    /**
     * @param string $c_viec
     */
    public function setCViec(string $c_viec): void
    {
        $this->c_viec = $c_viec;
    }


}