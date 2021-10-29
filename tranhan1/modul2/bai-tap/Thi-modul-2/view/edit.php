<h2>Cập nhật thông tin khách hàng</h2>
<form method="post" action="./index.php?page=edit">
    <input type="hidden" name="id" value="<?php echo $product['id']; ?>"/>
    <div class="form-group">
        <label for="">Tên Hàng</label>
        <input type="text" class="form-control" id="" name="nameProduct" value="<?php echo $product['nameProduct']; ?>">
    </div>
    <div class="form-group">
        <label for="">Loại hàng</label>
        <input type="text" class="form-control" id="" name="typeProduct" value="<?php echo $product['typeProduct']; ?>">
    </div>
    <div class="form-group">
        <label for="">Giá</label>
        <input type="number" class="form-control" id="" name="priceProduct" value="<?php echo $product['priceProduct']; ?>">
    </div>
    <div class="form-group">
        <label for="">Số Lượng</label>
        <input type="number" class="form-control" id="" name="quantityProduct" value="<?php echo $product['quantityProduct']; ?>">
    </div>
    <div class="form-group">
        <label for="">Mô tả</label>
        <input type="text" class="form-control" id="" name="description" value="<?php echo $product['description']; ?>">
    </div>
    <div class="form-group">
        <input type="submit" value="Update" class="btn btn-primary"/>
        <a href="index.php" class="btn btn-default">Cancel</a>
    </div>
</form>