<?php
if(isset($message)){
    echo "<p class='alert-info'>$message</p>";
}
?>
<div class="container">
<h3>Add New Product</h3>
<form method="post">
    <div class="form-group">
        <label for="">Name Product</label>
        <input type="text" class="form-control" id="" name="name">
    </div>
    <div class="form-group">
        <label for="">Price</label>
        <input type="number" class="form-control" id="" name="price">
    </div>
    <div class="form-group">
        <label for="">Description</label>
        <input type="text" class="form-control" id="" name="description">
    </div>
    <div class="form-group">
        <label for="">Producer</label>
        <input type="text" class="form-control" id="" name="producer">
    </div>


    <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</form>

