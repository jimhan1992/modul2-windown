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
<form action="display_discount.php" method="POST">
    <fieldset style="width: 100px">
        <label for="mo_ta">Product Description:</label> <br>
        <input type="text" name="mo_ta" id="mo_ta" placeholder="Mô tả của sản phẩm"> <br>
        <label for="gia">List Price:</label> <br>
        <input type="number" name="gia" id="gia" placeholder="Giá niêm yết"> <br>
        <label for="phan_tram">Discount Percent:</label> <br>
        <input type="number" name="phan_tram" id="phan_tram" placeholder="Tỷ lệ chiết khấu"> <br>
        <input type="submit" id="submit" value="Calculate Discount">
    </fieldset>
</form>
</body>
</html>
