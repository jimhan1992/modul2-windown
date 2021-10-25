<?php
include_once ("function.php");
$a=lay_du_lieu();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<a href="index.php">add</a>
<table>
    <tr>
        <td>STT</td>
        <td>Họ</td>
        <td>Tên</td>
        <td>Ngày Sinh</td>
        <td>Địa chỉ</td>
        <td>Công việc</td>
        <td>Sửa</td>
        <td>Xóa</td>
    </tr>
    <?php foreach ($a as$key=> $value): ?>
    <tr>
        <td><?php echo $key +1?></td>
        <td><?php echo $value["ho"];?></td>
        <td><?php echo $value["ten"];?></td>
        <td><?php echo $value["ngay_sinh"];?></td>
        <td><?php echo $value["dia_chi"];?></td>
        <td><?php echo $value["c_viec"];?></td>
        <td><a href="Sua.php?sua=<?php echo $key ?>"><button>Sửa</button></a></td>
        <td><a href="Xoa.php?xoa=<?php echo $key ?>"><button>Xóa</button></a></td>
        
    </tr>
    <?php endforeach;?>
</table>
</body>
</html>
