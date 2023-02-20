<?php
namespace App\Models;

use App\Models\BaseModel;

class m_categories extends BaseModel {
    protected $table_name = "categories";

    public function loadAllCategories () {
        $sql = "SELECT * FROM $this->table_name";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }

    public function loadOneCategory ($id) {
        $sql = "SELECT * FROM $this->table_name WHERE id = ?";
        $this->setQuery($sql);
        return $this->loadRow([$id]);
    }

    public function addCategory ($name_cate) {
        $sql = "INSERT INTO `$this->table_name` (`name_cate`) VALUES (?)";
        $this->setQuery($sql);
        $this->execute([$name_cate]);
    }

    public function editCategory ($id, $name_cate) {
        $sql = "UPDATE `$this->table_name` SET `name_cate` = ?, `updated_time` = current_timestamp() WHERE $this->table_name.id = ?";
        $this->setQuery($sql);
        $this->execute([$name_cate, $id]);
    }

    public function deleteCategory ($id) {
        $sql = "DELETE FROM $this->table_name WHERE id = ?";
        $this->setQuery($sql);
        $this->execute([$id]);
    }
}
?>