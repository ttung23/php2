<?php
namespace App\models;
// require_once "db.php";
require_once ("vendor/autoload.php");

class m_categories extends db {
    public function loadAllCategories () {
        $sql = "SELECT * FROM categories";
        return $this->getData($sql);
    }

    public function loadOneCategory ($id) {
        $sql = "SELECT * FROM categories WHERE id = $id";
        return $this->getData($sql, false);
    }

    public function addCategory ($name_cate) {
        $sql = "INSERT INTO `categories` (`name_cate`) VALUES ('$name_cate')";
        $this->getData($sql, false);
    }

    public function editCategory ($id, $name_cate) {
        $sql = "UPDATE `categories` SET `name_cate` = '$name_cate', `updated_time` = current_timestamp() WHERE categories.id = $id";
        $this->getData($sql, false);
    }

    public function deleteCategory ($id) {
        $sql = "DELETE FROM categories WHERE id = $id";
        $this->getData($sql, false);
    }
}
?>