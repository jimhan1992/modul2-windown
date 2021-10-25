<?php

namespace Model;

use Model\Database;
use PDOException;

class DBProduct
{
    public $pdo;

    public function __construct()
    {
        $database = new Database("root", "");
        $this->pdo = $database->connect();
    }

    public function add($name, $price, $description, $producer)
    {
        try {
            $sql = "CAll addProducts(:name,:price,:description,:producer)";
            $stmt = $this->pdo->prepare($sql);
            $stmt->bindParam('name', $name);
            $stmt->bindParam('price', $price);
            $stmt->bindParam('description', $description);
            $stmt->bindParam('producer', $producer);
            $stmt->execute();
        } catch (PDOException $PDOException) {
            echo "add error";
            exit();
        }

    }

    public function getAll()
    {
        $sql = "SELECT * FROM products";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }
    public function getId($id){
        $sql = "SELECT * FROM products WHERE id = ?";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindParam(1, $id);
        $stmt->execute();
        return $stmt->fetch();
    }

    public function delete($id){
        $sql = "DELETE FROM products WHERE id =$id";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
    }
    public function edit($id,$name, $price, $description, $producer){
        $sql = "UPDATE products SET name = :name, price = :price, description = :description, producer = :producer WHERE id = :id";
        $stmt = $this->pdo->prepare($sql);
        $stmt->bindParam('id', $id);
        $stmt->bindParam('name', $name);
        $stmt->bindParam('price', $price);
        $stmt->bindParam('description', $description);
        $stmt->bindParam('producer', $producer);
        $stmt->execute();
        return $stmt->fetch();
    }
    public function search($key){
        $sql = "SELECT * FROM products WHERE name LIKE N'%$key%'";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }


}