@extends('index')

@section('main')

<table class="mx-auto">
    <tr>
        <td class="text-center font-bold" colspan="11">DANH SÁCH NHÂN VIÊN</td>
    </tr>

    <tr>
        <th>ID</th>
        <th>Tên nhân viên</th>
        <th>Giới tính</th>
        <th>Ảnh nhân viên</th>
        <th>Địa chỉ</th>
        <th>Số điện thoại</th>
        <th>Lương (/h)</th>
        <th>Số giờ làm</th>
        <th>Ngày bắt đầu</th>
        <th>Ngày cập nhập</th>
        <th>Thao tác</th>
    </tr>

    @foreach ($staffs as $value)
        <tr>
            <td>{{$value->id}}</td>
            <td>{{$value->name}}</td>
            <td>{{$value->gender == 0 ? "Nữ" : "Nam"}}</td>
            <td><img src="image/{{$value->image}}" width="100" alt=""></td>
            <td>{{$value->address}}</td>
            <td>{{$value->phone}}</td>
            <td>{{$value->salary}}</td>
            <td>{{$value->so_gio_lam}}</td>
            <td>{{$value->created_time}}</td>
            <td>{{$value->updated_time}}</td>
            <td>
                <a href="editStaff/id_staff={{$value->id}}">Sửa</a>
                <a class="float-right" href="deleteStaff/id_staff={{$value->id}}" 
                onclick="return confirm('Bạn chắc chắn muốn xóa nhân viên {{$value->name}}')"
                >Xóa</a>
            </td>
        </tr>
    @endforeach

    <tr>
        <td class="text-center" colspan="11">Tổng số nhân viên: {{count($staffs)}}</td>
    </tr>

    <tr>
        <td class="text-right" colspan="11">
            <a href="addStaff">Thêm nhân viên</a>
        </td>
    </tr>
</table>
@endsection