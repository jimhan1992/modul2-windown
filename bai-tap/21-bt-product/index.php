<?php
use Controller\ProductController;
include_once "core/header.php";
include_once "core/navbar.php";

include_once "model/Database.php";
include_once "model/DBProduct.php";
include_once "model/Product.php";
include_once "controller/ProductController.php";
?>
<div class=" container">
<?php
$products = new  ProductController();
$page = isset($_GET['page'])? $_GET['page'] : NULL;
switch ($page){
    case 'add':
        $products->add();
        break;
    case "delete":
        $id=$_GET['id'];
        $products->delete($id);
        break;
    case "edit":
        $id=$_GET['id'];
        $products->edit($id);
        break;
    case "search":
        $key = $_REQUEST['key'];
        $products->search($key);
        break;
    default:
        $products->index();
        break;
}
?>


</div>




<?php
include_once "core/footer.php";
?>
