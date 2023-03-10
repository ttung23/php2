@extends('index')

@section('main')
<form action="{{ route('form-edit-category/id_category='.$category->id) }}" method="post" enctype="multipart/form-data">
    <table class="mx-auto">
        <tr>
            <td colspan="2" class="text-center font-bold">Sửa thông tin danh mục</td>
        </tr>
        <tr>
            <td><label for="name_cate">Tên danh mục</label></td>
            <td>
                <input name="name_cate" id="name_cate" 
                value="<?= $category->name_cate ?>" type="text">
            </td>
            @isset($_SESSION['err']['name_cate'])
                <td class="text-red-500">{{$_SESSION['err']['name_cate']}}</td>
            @endisset
        </tr>

        <tr>
            <td colspan="2">
                <button class="block mx-auto p-[5px] w-full" name="btn_editCategory" type="submit">
                    Sửa thông tin
                </button>
            </td>
        </tr>

        <tr>
            <td class="text-right" colspan="2">
                <a href="{{ route('list-categories') }}">Danh sách danh mục</a>
            </td>
        </tr>
    </table>
</form>
@endsection