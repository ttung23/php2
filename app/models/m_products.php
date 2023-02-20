<?php
namespace App\Models;

use App\Models\BaseModel;

class m_products extends BaseModel {
    protected $table_name = "products";

    public function loadAllProducts () {
        $sql = "SELECT * FROM $this->table_name";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }

    public function loadOneProduct ($id) {
        $sql = "SELECT * FROM $this->table_name WHERE id = ?";
        $this->setQuery($sql);
        return $this->loadRow([$id]);
    }

    public function addProduct ($name_product, $price_product, $quantity_product, $image_name, $id_cate, $description) {
        $sql = "INSERT INTO `$this->table_name` (`name_product`, `price`, `quantity`, `image`, `id_cate`, `description`) 
        VALUES (?, ?, ?, ?, ?, ?)";
        $this->setQuery($sql);
        $this->execute([$name_product, $price_product, $quantity_product, $image_name, $id_cate, $description]);
    }

    public function editProduct ($id, $name_product, $price_product, $quantity_product, $image_name, $id_cate, $description) {
        $sql = "UPDATE `$this->table_name` SET `name_product` = ?, `price` = ?, `quantity` = ?, `image` = ?, `id_cate` = ?, `description` = ?, `updated_time` = current_timestamp() 
        WHERE $this->table_name.id = ?";
        $this->setQuery($sql);
        $this->execute([$name_product, $price_product, $quantity_product, $image_name, $id_cate, $description, $id]);
    }

    public function deleteProduct ($id) {
        $sql = "DELETE FROM $this->table_name WHERE id = ?";
        $this->setQuery($sql);
        $this->execute([$id]);
    }
}
?>