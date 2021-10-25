<?php

/*-User
 * +protected $name:string
 * +protected $email:string
 * +public role:int
 * -+ getInfo()
 * -+ isAdmin()
 * -+setName
 * -+setEmail
 */

class User
{
    protected string $name;
    protected string $email;
    protected int $role;

    public function __construct($name, $email, $role = 2)
    {
        $this->name = $name;
        $this->email = $email;
        $this->role = $role;
    }

    public function getInfo()
    {
        echo "User: " . $this->name . "<br>";
        echo "Email: " . $this->email . "<br>";
        echo $this->isAdmin() . "<br>";
    }

    public function isAdmin()
    {
        if ($this->role == 1) {
            echo "là admin";
        } else {
            echo "là người dùng bình thường";
        }
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function setRole($role)
    {
        $this->role = $role;
    }

}