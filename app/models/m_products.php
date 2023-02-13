<?php
namespace App\Models;

class m_products extends db {
    public function loadAllProducts () {
        $sql = "SELECT * FROM products";
        return $this->getData($sql);
    }

    public function loadOneProduct ($id) {
        $sql = "SELECT * FROM products WHERE id = $id";
        return $this->getData($sql, false);
    }

    public function addProduct ($name_product, $price_product, $quantity_product, $image_name, $id_cate, $description) {
        $sql = "INSERT INTO `products` (`name_product`, `price`, `quantity`, `image`, `id_cate`, `description`) 
        VALUES ('$name_product', '$price_product', '$quantity_product', '$image_name', '$id_cate', '$description')";
        $this->getData($sql, false);
    }

    public function editProduct ($id, $name_product, $price_product, $quantity_product, $image_name, $id_cate, $description) {
        $sql = "UPDATE `products` SET `name_product` = '$name_product', `price` = '$price_product', `quantity` = '$quantity_product', `image` = '$image_name', `id_cate` = '$id_cate', `description` = '$description', `updated_time` = current_timestamp() WHERE products.id = $id";
        $this->getData($sql, false);
    }

    public function deleteProduct ($id) {
        $sql = "DELETE FROM products WHERE id = $id";
        $this->getData($sql, false);
    }
}
?>