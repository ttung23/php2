<?php
namespace App\Controllers;

use App\Models\m_staffs;

class c_staffs extends BaseController {
    public $m_staffs;

    public function __construct()
    {
        $this->m_staffs = new m_staffs();
    }

    public function list_staffs () {
        $staffs = $this->m_staffs->loadAllStaffs();

        // $title = "Danh sách nhân viên";
        $this->render("staffs.v_listStaffs", compact("staffs"));
    }

    public function add_staff () {
        if (isset($_POST['btn_addStaff'])) {
            $name_staff = $_POST['name_staff'];
            $gender = $_POST['gender'];
            $address_staff = $_POST['address_staff'];
            $phone_staff = $_POST['phone_staff'];
            $salary = $_POST['salary'];
            $so_gio_lam = 0;
            
            $image_staff = $_FILES['image_staff'];
            $image_name = $image_staff['name'];

            deleteSession();
            $err = [];

            if ($name_staff == "") {
                $err['name_staff'] = "Bạn chưa nhập tên nhân viên";
            }
            
            if ($address_staff == "") {
                $err['address_staff'] = "Bạn chưa nhập địa chỉ của nhân viên";
            }

            if ($phone_staff == "") {
                $err['phone_staff'] = "Bạn chưa nhập số điện thoại của nhân viên";
            } elseif (strlen($phone_staff) < 10 || strlen($phone_staff) > 10) {
                $err['phone_staff'] = "Số điện thoại của nhân viên phải có 10 số";
            }

            if ($salary == "") {
                $err['salary'] = "Bạn chưa nhập lương cho nhân viên";
            } elseif ($salary < 10) {
                $err['salary'] = "Lương của nhân viên phải lớn hơn hoặc bằng 10k/h";
            }

            $image_name = $image_staff['name'];
            $ext = pathinfo($image_name, PATHINFO_EXTENSION);

            if ($image_staff['size'] <= 0) {
                $err['image_staff'] = "Bạn chưa chọn ảnh";
            } else if ($ext != 'png' && $ext != 'jpg' && $ext != 'jpeg') {
                $err['image_staff'] = 'Ảnh không đúng định dạng';
            } else if ($image_staff['size'] >= 2 * 1024 * 1024) {
                $err['image_staff'] = 'Ảnh không được quá 2MB';
            }

            if (count($err) > 0) {
                $_SESSION['err'] = $err;
            } else {
                $this->m_staffs->addStaff($name_staff, $gender, $image_name, $address_staff, $phone_staff, $salary, $so_gio_lam);
                move_uploaded_file($image_staff['tmp_name'], "image/".$image_name);
                deleteSession();
                header("location: listStaffs");
            }
        }

        // $title = "Thêm nhân viên";
        $this->render("staffs.v_addStaff");

    }

    public function edit_staff () {
        $id = $_GET['id_staff'];
        $staff = $this->m_staffs->loadOneStaff($id);

        if (isset($_POST['btn_editStaff'])) {
            $name_staff = $_POST['name_staff'];
            $gender = $_POST['gender'];
            $image_name = $_POST['image_staff'];
            $address_staff = $_POST['address_staff'];
            $phone_staff = $_POST['phone_staff'];
            $salary = $_POST['salary'];
            $so_gio_lam = $_POST['so_gio_lam'];

            $image_staff = $_FILES['image_staff'];
            // var_dump($image_staff);
            // exit;

            deleteSession();
            $err = [];

            if ($name_staff == "") {
                $err['name_staff'] = "Bạn chưa nhập tên nhân viên";
            }
            
            if ($address_staff == "") {
                $err['address_staff'] = "Bạn chưa nhập địa chỉ của nhân viên";
            }

            if ($phone_staff == "") {
                $err['phone_staff'] = "Bạn chưa nhập số điện thoại của nhân viên";
            } elseif (strlen($phone_staff) < 10 || strlen($phone_staff) > 10) {
                $err['phone_staff'] = "Số điện thoại của nhân viên phải có 10 số";
            }

            if ($salary == "") {
                $err['salary'] = "Bạn chưa nhập lương cho nhân viên";
            } elseif ($salary < 10) {
                $err['salary'] = "Lương của nhân viên phải lớn hơn hoặc bằng 10k/h";
            }

            if ($so_gio_lam == "") {
                $err['so_gio_lam'] = "Bạn chưa nhập số giờ làm cho nhân viên";
            }

            if ($image_staff['size'] > 0) {
                $image_name = $image_staff['name'];
                $ext = pathinfo($image_name, PATHINFO_EXTENSION);
                
                if ($ext != 'png' && $ext != 'jpg' && $ext != 'jpeg') {
                    $err['image_staff'] = 'Ảnh không đúng định dạng';
                } else if ($image_staff['size'] >= 2 * 1024 * 1024) {
                    $err['image_staff'] = 'Ảnh không được quá 2MB';
                }
            }

            if (count($err) > 0) {
                $_SESSION['err'] = $err;
            } else {
                $this->m_staffs->editStaff($id, $name_staff, $gender, $image_name, $address_staff, $phone_staff, $salary, $so_gio_lam);
                if ($image_staff['size'] > 0) {
                    move_uploaded_file($image_staff['tmp_name'], "image/".$image_name);
                }
                deleteSession();
                header("location: listStaffs");
            }
        }

        // $title = "Sửa thông tin nhân viên";
        $this->render("staffs.v_editStaff", compact("staff"));

    }

    public function delete_staff () {
        $id = $_GET['id_staff'];
        $this->m_staffs->deleteStaff($id);

        header("location: listStaffs");
    }
}


?>