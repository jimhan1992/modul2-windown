<?php

namespace Controller;

use Model\DBProduct;

class ProductController
{
    private $products;

    public function __construct()
    {
        $this->products = new DBProduct();
    }

    public function index()
    {
        $products = $this->products->getAll();
        include_once "view/list.php";
    }

    public function add()
    {
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            include 'view/add.php';
        } else {
            $name = $_REQUEST["name"];
            $price = $_REQUEST["price"];
            $description = $_REQUEST["description"];
            $producer = $_REQUEST["producer"];
            $product = new DBProduct();
            $product->add($name, $price, $description, $producer);
            $message = 'ok';
            include 'view/add.php';
        }

    }

    public function delete($id)
    {
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
//            $this->products = new DBProduct();
            $product=$this->products->getId($id);
            include 'view/delete.php';
        } else {
            $id = $_REQUEST["id"];
            $product = new DBProduct();
            $product->delete($id);
            header('Location: index.php');
        }
    }
    public function edit($id){
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
//            $this->products = new DBProduct();
            $product=$this->products->getId($id);
            include 'view/edit.php';
        } else {
            $id = $_REQUEST["id"];
            $name = $_REQUEST["name"];
            $price = $_REQUEST["price"];
            $description = $_REQUEST["description"];
            $producer = $_REQUEST["producer"];
            $product = new DBProduct();
            $product->edit($id,$name, $price, $description, $producer);
            header('Location: index.php');
        }
    }

    public function search($key)
    {
        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
//            $this->products = new DBProduct();
            $products=$this->products->search($key);
            include 'view/search.php';
        }
//        else {
//            $id = $_REQUEST["id"];
//            $name = $_REQUEST["name"];
//            $price = $_REQUEST["price"];
//            $description = $_REQUEST["description"];
//            $producer = $_REQUEST["producer"];
//            $product = new DBProduct();
//            $product->edit($id,$name, $price, $description, $producer);
//            header('Location: index.php');
//        }
    }
}