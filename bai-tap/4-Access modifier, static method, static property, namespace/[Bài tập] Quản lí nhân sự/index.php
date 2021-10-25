<?php
include_once "Employee.php";
include_once "function.php";
//include_once "EmployeeManager.php";



if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $ho = $_POST["ho"];
    $ten = $_POST["ten"];
    $ngay_sinh = $_POST["ngay_sinh"];
    $dia_chi = $_POST["dia_chi"];
    $c_viec = $_POST["c_viec"];
    $a = new Employee($ho, $ten, $ngay_sinh, $dia_chi, $c_viec);
    gui_du_lieu($a);

//    var_dump($a);
    header("Location: hien_thi.php");
}

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<form action="" method="post">
    <fieldset style="width: 240px">
        <legend>Thêm vào danh sách</legend>
        <label for="ho">Họ: </label><br>
        <input type="text" name="ho" id="ho"><br>
        <label for="ten">Tên: </label><br>
        <input type="text" name="ten" id="ten"><br>
        <label for="ngay_sinh">Ngày sinh: </label><br>
        <input type="date" name="ngay_sinh" id="ngay_sinh"><br>
        <label for="dia_chi">Địa chỉ:</label><br>
        <textarea name="dia_chi" id="dia_chi">Ma cao</textarea><br>
        <label for="c_viec">Công việc: </label><br><select name="c_viec" id="c_viec">
            <option value="Giám đôc">Giám đôc</option>
            <option value="Nhân viên">Nhân viên</option>
            <option value="Chủ tịch">Chủ tịch</option>
        </select>
        <br><input type="submit" value="Add">
        <input type="reset" value="Reset">
    </fieldset>
</form>
</body>
</html>
