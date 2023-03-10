@extends('index')

@section('main')

<form action="{{ route('form-add-staff') }}" method="post" enctype="multipart/form-data">
    <table class="mx-auto">
        <tr>
            <td colspan="2" class="text-center font-bold">Thêm nhân viên</td>
        </tr>
        <tr>
            <td><label for="name_staff">Tên nhân viên</label></td>
            <td><input name="name_staff" id="name_staff" type="text"
            value="<?= $_POST['name_staff'] ?? "" ?>"></td>
            @isset($_SESSION['err']['name_staff'])
                <td class="error text-red-500">{{$_SESSION['err']['name_staff']}}</td>
            @endisset
        </tr>

        <tr>
            <td><label for="gender">Giới tính</label></td>
            <td>
                <select name="gender" id="gender">
                    <option value="0">Nữ</option>
                    <option value="1">Nam</option>
                </select>
            </td>
        </tr>

        <tr>
            <td><label for="image_staff">Ảnh nhân viên</label></td>
            <td><input name="image_staff" id="image_staff" type="file"></td>
            @isset($_SESSION['err']['image_staff'])
                <td class="error text-red-500">{{$_SESSION['err']['image_staff']}}</td>
            @endisset
        </tr>

        <tr>
            <td><label for="address_staff">Địa chỉ nhân viên</label></td>
            <td><input name="address_staff" id="address_staff" type="text"
            value="<?= $_POST['address_staff'] ?? "" ?>"></td>
            @isset($_SESSION['err']['address_staff'])
                <td class="error text-red-500">{{$_SESSION['err']['address_staff']}}</td>
            @endisset
        </tr>

        <tr>
            <td><label for="phone_staff">Số điện thoại nhân viên</label></td>
            <td><input name="phone_staff" id="phone_staff" type="number"
            value="<?= $_POST['phone_staff'] ?? "" ?>"></td>
            @isset($_SESSION['err']['phone_staff'])
                <td class="error text-red-500">{{$_SESSION['err']['phone_staff']}}</td>
            @endisset
        </tr>
        
        <tr>
            <td><label for="salary">Lương(/h)</label></td>
            <td>
                <input id="salary" name="salary" type="number"
                value="<?= $_POST['salary'] ?? "" ?>">
            </td>
            @isset($_SESSION['err']['salary'])
                <td class="error text-red-500">{{$_SESSION['err']['salary']}}</td>
            @endisset
        </tr>

        <tr>
            <td colspan="2">
                <button class="block mx-auto p-[5px] w-full" name="btn_addStaff" type="submit">Thêm</button>
            </td>
        </tr>

        <tr>
            <td class="text-right" colspan="2">
                <a href="{{route('list-staffs')}}">Danh sách nhân viên</a>
            </td>
        </tr>
    </table>
</form>
@endsection