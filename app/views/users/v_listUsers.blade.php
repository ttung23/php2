@extends('index')

@section('main')
<table class="mx-auto">
    <tr>
        <td class="text-center font-bold" colspan="10">DANH SÁCH KHÁCH HÀNG</td>
    </tr>

    <tr>
        <th>ID</th>
        <th>Tên khách hàng</th>
        <th>Giới tính</th>
        <th>Ảnh khách hàng</th>
        <th>Địa chỉ</th>
        <th>Số điện thoại</th>
        <th>Ngày tạo</th>
        <th>Ngày cập nhập</th>
        <th>Thao tác</th>
    </tr>

    @foreach ($users as $value)
        <tr>
            <td>{{$value->id}}</td>
            <td>{{$value->name}}</td>
            <td>{{$value->gender == 0 ? "Nữ" : "Nam"}}</td>
            <td><img width="100" src="image/{{$value->image}}" alt=""></td>
            <td>{{ $value->address }}</td>
            <td>{{$value->phone}}</td>
            <td>{{$value->created_time}}</td>
            <td>{{$value->updated_time}}</td>
            <td>
                <a href="edit-user/id_user={{$value->id}}">Sửa</a>
                <a class="float-right" href="delete-user/id_user={{$value->id}}" 
                onclick="return confirm('Bạn chắc chắn muốn xóa khách hàng {{$value->name}}')"
                >Xóa</a>
            </td>
        </tr>
    @endforeach

    <tr>
        <td class="text-center" colspan="10">Tổng số khách hàng: {{count($users)}}</td>
    </tr>
</table>
@endsection