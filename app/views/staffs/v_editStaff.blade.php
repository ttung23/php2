@extends('index')

@section('main')

<form action="{{ BASE_URL.'form-edit-staff&id_staff='.$staff->id }}" method="post" enctype="multipart/form-data">
    <table class="mx-auto">
        <tr>
            <td colspan="2" class="text-center font-bold">Sửa thông tin nhân viên</td>
        </tr>
        <tr>
            <td><label for="name_staff">Tên nhân viên</label></td>
            <td>
                <input name="name_staff" id="name_staff" 
                value="<?= $staff->name ?>" type="text">
            </td>
            @isset($_SESSION['err']['name_staff'])
                <td class="error text-red-500">{{$_SESSION['err']['name_staff']}}</td>
            @endisset
        </tr>

        <tr>
            <td><label for="gender">Giới tính</label></td>
            <td>
                <select name="gender" id="gender">
                    <option value="0" <?= $staff->gender == 0 ? "selected" : "" ?>>Nữ</option>
                    <option value="1" <?= $staff->gender == 1 ? "selected" : "" ?>>Nam</option>
                </select>
            </td>
        </tr>
        
        <tr>
            <td><label for="image_user">Ảnh hiện tại</label></td>
            <td>
                <img src="image/<?= $staff->image ?>" width="100" alt="">
                <input type="hidden" value="<?= $staff->image ?>" name="image_user" id="">
            </td>
        </tr>

        <!-- <tr>
            <td><label for="image_user">Chọn ảnh khác</label></td>
            <td><input name="image_user" id="image_user" type="file"></td>
            <?php //if (isset($err['image_user'])) { ?>
                <td class="error text-red-500"><?//= $err['image_user'] ?></td>
            <?php //} ?>
        </tr> -->

        <tr>
            <td><label for="address_staff">Địa chỉ nhân viên</label></td>
            <td>
                <input name="address_staff" id="address_staff" type="text"
                value="<?= $staff->address ?>">
            </td>
            @isset($_SESSION['err']['address_staff'])
                <td class="error text-red-500">{{$_SESSION['err']['address_staff']}}</td>
            @endisset
        </tr>

        <tr>
            <td><label for="phone_staff">Số điện thoại</label></td>
            <td>
                <input name="phone_staff" id="phone_staff" type="text"
                value="<?= $staff->phone ?>">
            </td>
            @isset($_SESSION['err']['phone_staff'])
                <td class="error text-red-500">{{$_SESSION['err']['phone_staff']}}</td>
            @endisset
        </tr>

        <tr>
            <td><label for="salary">Lương (/h)</label></td>
            <td>
                <input type="number" name="salary" id="salary"
                value="<?= $staff->salary ?>">
            </td>
            @isset($_SESSION['err']['salary'])
                <td class="error text-red-500">{{$_SESSION['err']['salary']}}</td>
            @endisset
        </tr>

        <tr>
            <td><label for="so_gio_lam">Số giờ làm</label></td>
            <td>
                <input type="number" min="0" name="so_gio_lam" id="so_gio_lam"
                value="<?= $staff->so_gio_lam ?>">
            </td>
            @isset($_SESSION['err']['so_gio_lam'])
                <td class="error text-red-500">{{$_SESSION['err']['so_gio_lam']}}</td>
            @endisset
        </tr>

        <tr>
            <td colspan="2">
                <button class="block mx-auto p-[5px] w-full" name="btn_editStaff" type="submit">
                    Sửa thông tin
                </button>
            </td>
        </tr>

        <tr>
            <td class="text-right" colspan="2">
                <a href="?url=listStaffs">Danh sách nhân viên</a>
            </td>
        </tr>
    </table>
</form>
@endsection