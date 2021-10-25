<?php

namespace Controller;

use Model\DBconnection;
use Model\Post;
use Model\PostDB;

class PostController
{
    public $postDB;

    public function __construct()
    {
        $connection = new DBconnection("mysql:host=localhost;dbname=blog_21", "root", "");
        $this->postDB = new PostDB($connection->connect());
    }

    public function index()
    {
        $posts = $this->postDB->getAll();
        include 'view/list.php';
    }

    public function add()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            include 'view/add.php';
        } else {
            $post['title'] = $_POST['title'];
            $post['teaser'] = $_POST['teaser'];
            $post['content'] = $_POST['content'];
            $post['created'] = $_POST['created'];
            $this->postDB->add($post);
            $message = 'ok';
//            include 'view/add.php';
        }
    }


    public function delete()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            $id = $_GET['id'];
            $post = $this->postDB->getId($id);
            include 'view/delete.php';
        } else {
            $id = $_REQUEST["id"];
            $post = $this->postDB;
            $post->delete($id);
            header('Location: index.php');
        }
    }

    public function view()
    {
        $id = $_GET['id'];
        $post = $this->postDB->getId($id);
        include 'view/view.php';
    }

    public function edit()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'GET') {
            $id = $_GET['id'];
            $post = $this->postDB->getId($id);
            include 'view/edit.php';
        } else {
            $id = $_POST['id'];
            $post['title'] = $_POST['title'];
            $post['teaser'] = $_POST['teaser'];
            $post['content'] = $_POST['content'];
            $post['created'] = $_POST['created'];
            $this->postDB->edit($id, $post);
            header('Location: index.php');
        }
    }
}