@extends('index')

@section('main')

<form action="{{ route('form-add-product') }}" method="post" enctype="multipart/form-data">
    <table class="mx-auto">
        <tr>
            <td colspan="2" class="text-center font-bold">Thêm sản phẩm</td>
        </tr>
        <tr>
            <td><label for="name_product">Tên sản phẩm</label></td>
            <td><input name="name_product" id="name_product" type="text"
            value="<?= $_POST['name_product'] ?? "" ?>"></td>
            @isset($_SESSION['err']['name_product'])
                <td class="error text-red-500">{{$_SESSION['err']['name_product']}}</td>
            @endisset
        </tr>

        <tr>
            <td><label for="price_product">Giá sản phẩm</label></td>
            <td><input name="price_product" id="price_product" type="number"
            value="<?= $_POST['price_product'] ?? "" ?>"></td>
            @isset($_SESSION['err']['price_product'])
                <td class="error text-red-500">{{$_SESSION['err']['price_product']}}</td>
            @endisset
        </tr>

        <tr>
            <td><label for="quantity_product">Số lượng sản phẩm</label></td>
            <td><input name="quantity_product" id="quantity_product" type="number"
            value="<?= $_POST['quantity_product'] ?? "" ?>"></td>
            @isset($_SESSION['err']['quantity_product'])
                <td class="error text-red-500">{{$_SESSION['err']['quantity_product']}}</td>
            @endisset
        </tr>

        <tr>
            <td><label for="image_product">Ảnh sản phẩm</label></td>
            <td><input name="image_product" id="image_product" type="file"></td>
            @isset($_SESSION['err']['image_product'])
                <td class="error text-red-500">{{$_SESSION['err']['image_product']}}</td>
            @endisset
        </tr>
        
        <tr>
            <td><label for="id_cate">Danh mục</label></td>
            <td>
                <select name="id_cate" id="id_cate">
                    @foreach ($categories as $value)
                        <option value="{{$value->id}}">{{$value->name_cate}}</option>
                    @endforeach
                </select>
            </td>
        </tr>

        <tr>
            <td><label for="description">Mô tả</label></td>
            <td>
                <textarea name="description" id="description" cols="30" rows="10"><?= $_POST['description'] ?? "" ?></textarea>
            </td>
            @isset($_SESSION['err']['description'])
                <td class="error text-red-500">{{$_SESSION['err']['description']}}</td>
            @endisset
        </tr>

        <tr>
            <td colspan="2">
                <button class="block mx-auto p-[5px] w-full" name="btn_addProduct" type="submit">Thêm</button>
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