<?php

namespace Model;

class PostDB
{
 public $connection;

    /**
     * @param $connection
     */
    public function __construct($connection)
    {
        $this->connection = $connection;
    }
    public  function getAll(){
        $sql = "SELECT * FROM posts";
        $stmt = $this->connection->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }
    public function  add($post){
        $sql = "INSERT INTO posts(title, teaser, content, created) VALUES (?, ?, ?, ?)";
        $stmt = $this->connection->prepare($sql);
        $stmt->bindParam(1, $post['title']);
        $stmt->bindParam(2, $post['teaser']);
        $stmt->bindParam(3, $post['content']);
        $stmt->bindParam(4, $post['created']);
        return $stmt->execute();
    }
    public function getId($id){
        $sql = "SELECT * FROM posts WHERE id = ?";
        $stmt = $this->connection->prepare($sql);
        $stmt->bindParam(1, $id);
        $stmt->execute();
        return $stmt->fetch();
    }
    public function delete($id){
        $sql = "DELETE FROM posts WHERE id =$id";
        $stmt = $this->connection->prepare($sql);
        $stmt->execute();
    }
    public function edit($id,$post){
        $sql = "UPDATE posts SET title = ?, teaser = ?, content = ?, created = ? WHERE id = ?";
        $statement = $this->connection->prepare($sql);
        $statement->bindParam(1, $post['title']);
        $statement->bindParam(2, $post['teaser']);
        $statement->bindParam(3, $post['content']);
        $statement->bindParam(4, $post['created']);
        $statement->bindParam(5, $id);
        return $statement->execute();
    }


}