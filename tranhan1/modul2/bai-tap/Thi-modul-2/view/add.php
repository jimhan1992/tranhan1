<?php
if (isset($message)) {
    echo "<p class='alert-info'>$message</p>";
}
?>
<div class="container">
    <h3>Thêm mặt hàng</h3>
    <form method="post">
        <div class="form-group">
            <label for="">Tên hàng</label>
            <input type="text" class="form-control" id="" name="nameProduct">
        </div>
<!--        <div class="form-group">-->
<!--            <label for="">Loại hàng</label>-->
<!--            <input type="text" class="form-control" id="" name="typeProduct">-->
<!--        </div>-->
        <div class="form-group">
        <select name="typeProduct" id="">
            <option value="Điện Thoại">Điện Thoại</option>
            <option value="Điều Hòa">Điều Hòa</option>
            <option value="Tủ Lạnh">Điện Thoại</option>
        </select>
        </div>
        <div class="form-group">
            <label for="">Giá</label>
            <input type="number" class="form-control" id="" name="priceProduct">
        </div>
        <div class="form-group">
            <label for="">Số lượng</label>
            <input type="number" class="form-control" id="" name="quantityProduct">
        </div>
        <div class="form-group">
            <label for="">Mô tả</label>
            <input type="text" class="form-control" id="" name="description">
        </div>


        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>


