
<div class="col-12 col-md-12 mt-2">
    <div class="card">
        <div class="card-header">
            Kết Quả
        </div>
        <div class="card-body">
            <div class="col-12">
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th>STT</th>
                        <th>Tên</th>
                        <th>price</th>
                        <th>description</th>
                        <th>producer</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($products as $value): ?>
                        <tr>
                            <td><?php echo $value['id']; ?></td>
                            <td><?php echo $value['name']; ?></td>
                            <td><?php echo $value['price']; ?></td>
                            <td><?php echo $value['description']; ?></td>
                            <td><?php echo $value['producer']; ?></td>

                            <td><a href="index.php?page=delete&id=<?php echo $value["id"]; ?>"
                                   class="btn btn-danger btn-sm">Delete</a>
                                <a href="index.php?page=edit&id=<?php echo $value["id"]; ?>"
                                   class="btn btn-primary btn-sm">Update</a></td></tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

