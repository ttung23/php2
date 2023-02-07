<?php
namespace App\models;
require_once ("vendor/autoload.php");

// require_once "db.php";

class m_users extends db {
    public function loadAllUsers () {
        $sql = "SELECT * FROM users";
        return $this->getData($sql);
    }

    public function loadOneUser ($id) {
        $sql = "SELECT * FROM users WHERE id = $id";
        return $this->getData($sql, false);
    }

    public function addUser ($name_user, $gender, $image, $address, $phone) {
        $sql = "INSERT INTO `users` (`name_staff`, `gender`, `image`, `address`, `phone`) 
        VALUES ('$name_user', '$gender', '$image', '$address', '$phone')";
        $this->getData($sql, false);
    }

    public function editUser ($id, $name_user, $gender, $image, $address, $phone) {
        $sql = "UPDATE `users` SET `name` = '$name_user', `gender` = $gender, `image` = '$image',
        `address` = '$address', `phone` = '$phone', `updated_time` = current_timestamp() 
        WHERE users.id = $id";
        $this->getData($sql, false);
    }

    public function deleteUser ($id) {
        $sql = "DELETE FROM users WHERE id = $id";
        $this->getData($sql, false);
    }
}
?>