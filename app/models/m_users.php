<?php
namespace App\Models;

use App\Models\BaseModel;

class m_users extends BaseModel {
    protected $table_name = "users";

    public function loadAllUsers () {
        $sql = "SELECT * FROM $this->table_name";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }

    public function loadOneUser ($id) {
        $sql = "SELECT * FROM $this->table_name WHERE id = ?";
        $this->setQuery($sql);
        return $this->loadRow([$id]);
    }

    public function addUser ($name_user, $gender, $image, $address, $phone) {
        $sql = "INSERT INTO `$this->table_name` (`name_staff`, `gender`, `image`, `address`, `phone`) 
        VALUES (?, ?, ?, ?, ?)";
        $this->setQuery($sql);
        $this->execute([$name_user, $gender, $image, $address, $phone]);
    }

    public function editUser ($id, $name_user, $gender, $image, $address, $phone) {
        $sql = "UPDATE `$this->table_name` SET `name` = ?, `gender` = ?, `image` = ?,
        `address` = ?, `phone` = ?, `updated_time` = current_timestamp() 
        WHERE users.id = ?";
        $this->setQuery($sql);
        $this->execute([$name_user, $gender, $image, $address, $phone, $id]);
    }

    public function deleteUser ($id) {
        $sql = "DELETE FROM $this->table_name WHERE id = ?";
        $this->setQuery($sql);
        $this->execute([$id]);
    }
}
?>