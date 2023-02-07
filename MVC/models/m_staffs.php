<?php
namespace App\models;
require_once ("vendor/autoload.php");

// require_once "db.php";

class m_staffs extends db {
    public function loadAllStaffs () {
        $sql = "SELECT * FROM staffs";
        return $this->getData($sql);
    }

    public function loadOneStaff ($id) {
        $sql = "SELECT * FROM staffs WHERE id = $id";
        return $this->getData($sql, false);
    }

    public function addStaff ($name_staff, $gender, $image, $address, $phone, $salary, $so_gio_lam) {
        $sql = "INSERT INTO `staffs` (`name`, `gender`, `image`, `address`, `phone`, `salary`, `so_gio_lam`) 
        VALUES ('$name_staff', '$gender', '$image', '$address', '$phone', '$salary', '$so_gio_lam')";
        $this->getData($sql, false);
    }

    public function editStaff ($id, $name_staff, $gender, $image, $address, $phone, $salary, $so_gio_lam) {
        $sql = "UPDATE `staffs` SET `name` = '$name_staff', `gender` = $gender, `image` = '$image',
        `address` = '$address', `phone` = '$phone', `so_gio_lam` = '$so_gio_lam',
        `salary` = '$salary', `updated_time` = current_timestamp() 
        WHERE staffs.id = $id";

        // echo $sql;
        // exit;
        $this->getData($sql, false);
    }

    public function deleteStaff ($id) {
        $sql = "DELETE FROM staffs WHERE id = $id";
        $this->getData($sql, false);
    }
}
?>