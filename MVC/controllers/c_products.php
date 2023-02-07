<?php
namespace App\controllers;
require_once ("vendor/autoload.php");
// require_once "MVC/models/m_products.php";
// require_once "MVC/models/m_categories.php";

use App\models\m_products;
use App\models\m_categories;

class c_products {
    public $m_products;
    public $m_categories;

    public function __construct()
    {
        $this->m_products = new m_products();
        $this->m_categories = new m_categories();
    }

    public function list_products () {
        $products = $this->m_products->loadAllProducts();

        $title = "Danh sách sản phẩm";
        $view = "./MVC/views/products/v_listProducts.php";
        include "./templates/layout.php";
    }

    public function add_product () {
        $categories = $this->m_categories->loadAllCategories();

        if (isset($_POST['btn_addProduct'])) {
            $name_product = $_POST['name_product'];
            $price_product = $_POST['price_product'];
            $quantity_product = $_POST['quantity_product'];
            $id_cate = $_POST['id_cate'];
            $description = $_POST['description'];
            
            $image_product = $_FILES['image_product'];
            $image_name = $image_product['name'];

            $err = [];

            if ($name_product == "") {
                $err['name_product'] = "Bạn chưa nhập tên sản phẩm";
            }

            if ($price_product == "") {
                $err['price_product'] = "Bạn chưa nhập giá của sản phẩm";
            } elseif ($price_product <= 0) {
                $err['price_product'] = "Giá của sản phẩm phải lớn hơn 0";
            }

            if ($quantity_product == "") {
                $err['quantity_product'] = "Bạn chưa nhập số lượng của sản phẩm";
            } elseif ($quantity_product <= 0) {
                $err['quantity_product'] = "Số lượng của sản phẩm phải lớn hơn 0";
            }

            if ($description == "") {
                $err['description'] = "Bạn chưa nhập mô tả cho sản phẩm";
            }

            $image_name = $image_product['name'];
            $ext = pathinfo($image_name, PATHINFO_EXTENSION);

            if ($image_product['size'] <= 0) {
                $err['image_product'] = "Bạn chưa chọn ảnh";
            } else if ($ext != 'png' && $ext != 'jpg' && $ext != 'jpeg') {
                $err['image_product'] = 'Ảnh không đúng định dạng';
            } else if ($image_product['size'] >= 2 * 1024 * 1024) {
                $err['image_product'] = 'Ảnh không được quá 2MB';
            }

            if (empty($err)) {
                $this->m_products->addProduct($name_product, $price_product, $quantity_product, $image_name, $id_cate, $description);
                move_uploaded_file($image_product['tmp_name'], "image/".$image_name);
                header("location: ?");
            }
        }

        $title = "Thêm sản phẩm";
        $view = "./MVC/views/products/v_addProduct.php";
        include "./templates/layout.php";
    }

    public function edit_product () {
        $id = $_GET['id_product'];
        $product = $this->m_products->loadOneProduct($id);
        $categories = $this->m_categories->loadAllCategories();

        if (isset($_POST['btn_editProduct'])) {
            $name_product = $_POST['name_product'];
            $price_product = $_POST['price_product'];
            $quantity_product = $_POST['quantity_product'];
            $image_name = $_POST['image_product'];
            $id_cate = $_POST['id_cate'];
            $description = $_POST['description'];
            
            $image_product = $_FILES['image_product'];
            
            $err = [];

            if ($name_product == "") {
                $err['name_product'] = "Bạn chưa nhập tên sản phẩm";
            }

            if ($price_product == "") {
                $err['price_product'] = "Bạn chưa nhập giá của sản phẩm";
            } elseif ($price_product <= 0) {
                $err['price_product'] = "Giá của sản phẩm phải lớn hơn 0";
            }

            if ($quantity_product == "") {
                $err['quantity_product'] = "Bạn chưa nhập số lượng của sản phẩm";
            } elseif ($quantity_product <= 0) {
                $err['quantity_product'] = "Số lượng của sản phẩm phải lớn hơn 0";
            }

            if ($description == "") {
                $err['description'] = "Bạn chưa nhập mô tả cho sản phẩm";
            }

            if ($image_product['size'] > 0) {
                $image_name = $image_product['name'];
                $ext = pathinfo($image_name, PATHINFO_EXTENSION);
                
                if ($ext != 'png' && $ext != 'jpg' && $ext != 'jpeg') {
                    $err['image_product'] = 'Ảnh không đúng định dạng';
                } else if ($image_product['size'] >= 2 * 1024 * 1024) {
                    $err['image_product'] = 'Ảnh không được quá 2MB';
                }
            }
            
            if (empty($err)) {
                $this->m_products->editProduct($id, $name_product, $price_product, $quantity_product, $image_name, $id_cate, $description);
                if ($image_product['size'] > 0) {
                    move_uploaded_file($image_product['tmp_name'], "image/".$image_name);
                }
                header("location: ?");
            }
        }

        $title = "Sửa thông tin sản phẩm";
        $view = "./MVC/views/products/v_editProduct.php";
        include "./templates/layout.php";
    }

    public function delete_product () {
        $id = $_GET['id_product'];
        $this->m_products->deleteProduct($id);

        header("location:?");
    }
}
?>