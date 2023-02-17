@extends('index')

@section('main')
<table class="mx-auto">
    <tr>
        <td class="text-center font-bold" colspan="10">DANH SÁCH DANH MỤC</td>
    </tr>

    <tr>
        <th>ID</th>
        <th>Tên danh mục</th>
        <th>Ngày tạo</th>
        <th>Ngày cập nhập</th>
        <th>Thao tác</th>
    </tr>

    @foreach ($categories as $value)
        <tr>
            <td>{{ $value->id }}</td>
            <td>{{ $value->name_cate }}</td>
            <td>{{$value->created_time}}</td>
            <td>{{$value->updated_time}}</td>
            <td>
                <a href="editCategory/id_category={{ $value->id }}">Sửa</a>
                <a class="float-right" href="delete-category/id_category={{ $value->id }}" 
                onclick="return confirm('Bạn chắc chắn muốn xóa danh mục {{ $value->name_cate }}')"
                >Xóa</a>
            </td>
        </tr>
    @endforeach

    <tr>
        <td class="text-center" colspan="10">Tổng số danh mục: {{count($categories)}}</td>
    </tr>

    <tr>
        <td class="text-right" colspan="10">
            <a href="addCategory">Thêm danh mục</a>
        </td>
    </tr>
</table>
@endsection