<?php
namespace App\Controllers;

use App\Models\m_users;

class c_users extends BaseController {
    public $m_users;

    public function __construct()
    {
        $this->m_users = new m_users();
    }

    public function list_users () {
        $users = $this->m_users->loadAllUsers();

        // $title = "Danh sách khách hàng";
        // $view = "./app/views/users/v_listUsers.php";
        // include "./templates/layout.php";
        $this->render("users.v_listUsers", compact("users"));

    }

    public function edit_user () {
        $id = $_GET['id_user'];
        $user = $this->m_users->loadOneUser($id);

        if (isset($_POST['btn_editUser'])) {
            $name_user = $_POST['name_user'];
            $gender = $_POST['gender'];
            $image_name = $_POST['image_user'];
            $address_user = $_POST['address_user'];
            $phone_user = $_POST['phone_user'];

            $image_user = $_FILES['image_user'];

            // echo $gender;
            // exit;

            $err = [];

            if ($name_user == "") {
                $err['name_user'] = "Bạn chưa nhập tên khách hàng";
            }
            
            if ($address_user == "") {
                $err['address_user'] = "Bạn chưa nhập địa chỉ của khách hàng";
            }

            if ($phone_user == "") {
                $err['phone_user'] = "Bạn chưa nhập số điện thoại của khách hàng";
            } elseif (strlen($phone_user) < 10 || strlen($phone_user) > 10) {
                $err['phone_user'] = "Số điện thoại của khách hàng phải có 10 số";
            }

            if ($image_user['size'] > 0) {
                $image_name = $image_user['name'];
                $ext = pathinfo($image_name, PATHINFO_EXTENSION);
                
                if ($ext != 'png' && $ext != 'jpg' && $ext != 'jpeg') {
                    $err['image_user'] = 'Ảnh không đúng định dạng';
                } else if ($image_user['size'] >= 2 * 1024 * 1024) {
                    $err['image_user'] = 'Ảnh không được quá 2MB';
                }
            }

            if (empty($err)) {
                $this->m_users->editUser($id, $name_user, $gender, $image_name, $address_user, $phone_user);
                if ($image_user['size'] > 0) {
                    move_uploaded_file($image_user['tmp_name'], "image/".$image_name);
                }
                header("location: listUsers");
            }
        }

        // $title = "Sửa thông tin khách hàng";
        // $view = "./MVC/views/users/v_editUser.php";
        // include "./templates/layout.php";
        $this->render("users.v_editUser", compact("user"));

    }

    public function delete_user () {
        $id = $_GET['id_user'];
        $this->m_users->deleteUser($id);

        header("location: listUsers");
    }
}
?>