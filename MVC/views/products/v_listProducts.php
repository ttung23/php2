<table class="mx-auto">
    <tr>
        <td class="text-center font-bold" colspan="10">DANH SÁCH SẢN PHẨM</td>
    </tr>

    <tr>
        <th>ID</th>
        <th>Tên sản phẩm</th>
        <th>Giá</th>
        <th>Số lượng</th>
        <th>Ảnh sản phẩm</th>
        <th>Danh mục</th>
        <th>Mô tả</th>
        <th>Ngày tạo</th>
        <th>Ngày cập nhập</th>
        <th>Thao tác</th>
    </tr>

    <?php foreach ($products as $value) { ?>
        <tr>
            <td><?= $value->id ?></td>
            <td><?= $value->name_product ?></td>
            <td><?= number_format($value->price, 0, ",", ".") ?></td>
            <td><?= $value->quantity ?></td>
            <td><img width="100" src="image/<?= $value->image ?>" alt=""></td>
            <td><?php if ($value->id_cate == 1) {
                echo "Điện thoại";
            } elseif ($value->id_cate == 2) {
                echo "Máy tính";
            }
            ?></td>
            <td><?= $value->description ?></td>
            <td><?= $value->created_time ?></td>
            <td><?= $value->updated_time ?></td>
            <td>
                <a href="?url=editProduct&id_product=<?= $value->id ?>">Sửa</a>
                <a class="float-right" href="?url=deleteProduct&id_product=<?= $value->id ?>" 
                onclick="return confirm('Bạn chắc chắn muốn xóa sản phẩm <?= $value->name_product ?>')"
                >Xóa</a>
            </td>
        </tr>
    <?php } ?>

    <tr>
        <td class="text-center" colspan="10">Tổng số sản phẩm: <?= count($products) ?></td>
    </tr>

    <tr>
        <td class="text-right" colspan="10">
            <a href="?url=addProduct">Thêm sản phẩm</a>
        </td>
    </tr>
</table>