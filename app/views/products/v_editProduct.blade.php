@extends('index')

@section('main')

<form action="" method="post" enctype="multipart/form-data">
    <table class="mx-auto">
        <tr>
            <td colspan="2" class="text-center font-bold">Sửa thông tin sản phẩm</td>
        </tr>
        <tr>
            <td><label for="name_product">Tên sản phẩm</label></td>
            <td>
                <input name="name_product" id="name_product" 
                value="<?= $product->name_product ?>" type="text">
            </td>
            <?php if (isset($err['name_product'])) { ?>
                <td class="text-red-500"><?= $err['name_product'] ?></td>
            <?php } ?>
        </tr>

        <tr>
            <td><label for="price_product">Giá sản phẩm</label></td>
            <td>
                <input name="price_product" id="price_product" type="text"
                value="<?= $product->price ?>">
            </td>
            <?php if (isset($err['price_product'])) { ?>
                <td class="text-red-500"><?= $err['price_product'] ?></td>
            <?php } ?>
        </tr>

        <tr>
            <td><label for="quantity_product">Số lượng sản phẩm</label></td>
            <td>
                <input name="quantity_product" id="quantity_product" type="text"
                value="<?= $product->quantity ?>">
            </td>
            <?php if (isset($err['quantity_product'])) { ?>
                <td class="text-red-500"><?= $err['quantity_product'] ?></td>
            <?php } ?>
        </tr>

        <tr>
            <td><label for="image_product">Ảnh hiện tại</label></td>
            <td>
                <img src="image/<?= $product->image ?>" width="100" alt="">
                <input type="hidden" value="<?= $product->image ?>" name="image_product" id="">
            </td>
        </tr>

        <tr>
            <td><label for="image_product">Chọn ảnh khác</label></td>
            <td><input name="image_product" id="image_product" type="file"></td>
            <?php if (isset($err['image_product'])) { ?>
                <td class="text-red-500"><?= $err['image_product'] ?></td>
            <?php } ?>
        </tr>
        
        <tr>
            <td><label for="id_cate">Danh mục</label></td>
            <td>
                <select name="id_cate" id="id_cate">
                    <?php foreach($categories as $value) { ?>
                        <option <?= $product->id_cate == $value->id ? "selected" : "" ?> value="<?= $value->id ?>"><?= $value->name_cate ?></option>
                    <?php } ?>
                </select>
            </td>
        </tr>

        <tr>
            <td><label for="description">Mô tả</label></td>
            <td>
                <textarea name="description" id="description" 
                cols="30" rows="10"><?= $product->description ?></textarea>
            </td>
            <?php if (isset($err['description'])) { ?>
                <td class="text-red-500"><?= $err['description'] ?></td>
            <?php } ?>
        </tr>

        <tr>
            <td colspan="2">
                <button class="block mx-auto p-[5px] w-full" name="btn_editProduct" type="submit">
                    Sửa thông tin
                </button>
            </td>
        </tr>

        <tr>
            <td class="text-right" colspan="2">
                <a href="listProducts">Danh sách sản phẩm</a>
            </td>
        </tr>
    </table>
</form>
@endsection