@extends('index')

@section('main')
<table class="mx-auto">
    <tr>
        <td class="text-center font-bold" colspan="10">DANH SÁCH BÌNH LUẬN</td>
    </tr>

    <tr>
        <th>ID</th>
        <th>Nội dung</th>
        <th>Tên người dùng</th>
        <th>Tên sản phẩm</th>
        <th>Ngày tạo</th>
        <th>Ngày cập nhập</th>
        <th>Thao tác</th>
    </tr>

    @foreach ($comments as $value)
        <tr>
            <td>{{$value->id}}</td>
            <td>{{$value->content}}</td>
            <td>{{$value->name}}</td>
            <td>{{$value->name_product}}</td>
            <td>{{$value->created_time}}</td>
            <td>{{$value->updated_time}}</td>
            <td>
                <a class="float-right" href="delete-comment/id_comment={{ $value->id }}" 
                onclick="return confirm('Bạn chắc chắn muốn xóa bình luận của {{$value->name}} vào {{$value->created_time}}')"
                >Xóa</a>
            </td>
        </tr>
    @endforeach

    <tr>
        <td class="text-center" colspan="10">Tổng số bình luận: {{ count($comments) }}</td>
    </tr>
</table>
@endsection