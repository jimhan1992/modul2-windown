<h2>Cập nhật thông tin khách hàng</h2>
<form method="post" action="./index.php?page=edit">
    <input type="hidden" name="id" value="<?php echo $product['id']; ?>"/>
    <div class="form-group">
        <label for="">Name Product</label>
        <input type="text" class="form-control" id="" name="name" value="<?php echo $product['name']; ?>">
    </div>
    <div class="form-group">
        <label for="">Price</label>
        <input type="number" class="form-control" id="" name="price" value="<?php echo $product['price']; ?>">
    </div>
    <div class="form-group">
        <label for="">Description</label>
        <input type="text" class="form-control" id="" name="description" value="<?php echo $product['description']; ?>">
    </div>
    <div class="form-group">
        <label for="">Producer</label>
        <input type="text" class="form-control" id="" name="producer" value="<?php echo $product['producer']; ?>">
    </div>
    <div class="form-group">
        <input type="submit" value="Update" class="btn btn-primary"/>
        <a href="index.php" class="btn btn-default">Cancel</a>
    </div>
</form>