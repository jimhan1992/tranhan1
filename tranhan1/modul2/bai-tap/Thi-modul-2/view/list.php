

<div class="col-12 col-md-12 mt-2">
    <div class="card">
        <div class="card-header">
            Danh sách sản phẩm
        </div>
        <div class="card-body">
            <div class="col-12">
                <a class="btn btn-success mb-2" href="index.php?page=add">Thêm mới</a>
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Tên hàng</th>
                        <th>Loại hàng</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php foreach ($products as $value): ?>
                        <tr>
                            <td><?php echo $value['id']; ?></td>
                            <td><?php echo $value['nameProduct']; ?></td>
                            <td><?php echo $value['typeProduct']; ?></td>

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


