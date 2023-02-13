@extends('index')

@section('main')
<form action="" method="post" enctype="multipart/form-data">
    <table class="mx-auto">
        <tr>
            <td colspan="2" class="text-center font-bold">Thêm danh mục</td>
        </tr>
        <tr>
            <td><label for="name_cate">Tên danh mục</label></td>
            <td><input name="name_cate" id="name_cate" type="text"
            value="<?= $_POST['name_cate'] ?? "" ?>"></td>
            <?php if (isset($err['name_cate'])) { ?>
                <td class="error text-red-500"><?= $err['name_cate'] ?></td>
            <?php } ?>
        </tr>

        <tr>
            <td colspan="2">
                <button class="block mx-auto p-[5px] w-full" name="btn_addCategory" type="submit">Thêm</button>
            </td>
        </tr>

        <tr>
            <td class="text-right" colspan="2">
                <a href="listCategories">Danh sách danh mục</a>
            </td>
        </tr>
    </table>
</form>
@endsection