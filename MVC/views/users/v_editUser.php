<form action="" method="post" enctype="multipart/form-data">
    <table class="mx-auto">
        <tr>
            <td colspan="2" class="text-center font-bold">Sửa thông tin khách hàng</td>
        </tr>
        <tr>
            <td><label for="name_user">Tên khách hàng</label></td>
            <td>
                <input name="name_user" id="name_user" 
                value="<?= $user->name ?>" type="text">
            </td>
            <?php if (isset($err['name_user'])) { ?>
                <td class="error text-red-500"><?= $err['name_user'] ?></td>
            <?php } ?>
        </tr>

        <tr>
            <td><label for="gender">Giới tính</label></td>
            <td>
                <select name="gender" id="gender">
                    <option value="0" <?= $user->gender == 0 ? "selected" : "" ?>>Nữ</option>
                    <option value="1" <?= $user->gender == 1 ? "selected" : "" ?>>Nam</option>
                </select>
            </td>
        </tr>
        
        <tr>
            <td><label for="image_user">Ảnh hiện tại</label></td>
            <td>
                <img src="image/<?= $user->image ?>" width="100" alt="">
                <input type="hidden" value="<?= $user->image ?>" name="image_user" id="">
            </td>
        </tr>

        <tr>
            <td><label for="image_user">Chọn ảnh khác</label></td>
            <td><input name="image_user" id="image_user" type="file"></td>
            <?php if (isset($err['image_user'])) { ?>
                <td class="error text-red-500"><?= $err['image_user'] ?></td>
            <?php } ?>
        </tr>

        <tr>
            <td><label for="address_user">Địa chỉ khách hàng</label></td>
            <td>
                <input name="address_user" id="address_user" type="text"
                value="<?= $user->address ?>">
            </td>
            <?php if (isset($err['address_user'])) { ?>
                <td class="error text-red-500"><?= $err['address_user'] ?></td>
            <?php } ?>
        </tr>

        <tr>
            <td><label for="phone_user">Số điện thoại</label></td>
            <td>
                <input name="phone_user" id="phone_user" type="text"
                value="<?= $user->phone ?>">
            </td>
            <?php if (isset($err['phone_user'])) { ?>
                <td class="error text-red-500"><?= $err['phone_user'] ?></td>
            <?php } ?>
        </tr>

        <tr>
            <td colspan="2">
                <button class="block mx-auto p-[5px] w-full" name="btn_editUser" type="submit">
                    Sửa thông tin
                </button>
            </td>
        </tr>

        <tr>
            <td class="text-right" colspan="2">
                <a href="?url=listUsers">Danh sách khách hàng</a>
            </td>
        </tr>
    </table>
</form>