<?php
include_once "User.php";
$tran_han = new User("tran_han", "tranhan1992@gmail.com", 1);
$tran_han->setName("cu_hìu");
$tran_han->setEmail("abc@gmail.com");
$tran_han->setRole(5);
$tran_han->getInfo();