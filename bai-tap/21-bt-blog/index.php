<?php
require "model/DBConnection.php";
require "model/PostDB.php";
require "model/Post.php";
require "controller/PostController.php";

use Controller\PostController;

?>
<html>
<head>
    <meta charset="utf-8">
    <title>Personal Blog</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
          integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

</head>
<body>
<div class="container">
    <div class="navbar navbar-default">
        <a class="navbar-brand" href="index.php">My Blog</a>
    </div>
    <?php
    $controller = new PostController();
    $page = isset($_REQUEST['page']) ? $_REQUEST['page'] : NULL;

    switch ($page) {
        case 'add':
            $controller->add();
            break;
        case 'view':
            $controller->view();
            break;
        case 'delete':
            $controller->delete();
            break;
        case 'edit':
            $controller->edit();
            break;
        default:
            $controller->index();
            break;
    }
    ?>
</div>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns"
        crossorigin="anonymous"></script>
</body>
</html>