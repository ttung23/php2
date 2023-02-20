<?php
namespace App\Models;

use App\Models\BaseModel;

class m_staffs extends BaseModel {
    protected $table_name = "staffs";

    public function loadAllStaffs () {
        $sql = "SELECT * FROM $this->table_name";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }

    public function loadOneStaff ($id) {
        $sql = "SELECT * FROM $this->table_name WHERE id = ?";
        $this->setQuery($sql);
        return $this->loadRow([$id]);
    }

    public function addStaff ($name_staff, $gender, $image, $address, $phone, $salary, $so_gio_lam) {
        $sql = "INSERT INTO `$this->table_name` (`name`, `gender`, `image`, `address`, `phone`, `salary`, `so_gio_lam`) 
        VALUES (?, ?, ?, ?, ?, ?, ?)";
        $this->setQuery($sql);
        $this->execute([$name_staff, $gender, $image, $address, $phone, $salary, $so_gio_lam]);
    }

    public function editStaff ($id, $name_staff, $gender, $image, $address, $phone, $salary, $so_gio_lam) {
        $sql = "UPDATE `$this->table_name` SET `name` = ?, `gender` = ?, `image` = ?,
        `address` = ?, `phone` = ?, `so_gio_lam` = ?,
        `salary` = ?, `updated_time` = current_timestamp() 
        WHERE staffs.id = ?";
        $this->setQuery($sql);

        $this->execute([$name_staff, $gender, $image, $address, $phone, $salary, $so_gio_lam, $id]);
    }

    public function deleteStaff ($id) {
        $sql = "DELETE FROM $this->table_name WHERE id = ?";
        $this->setQuery($sql);
        $this->execute([$id]);
    }
}
?>