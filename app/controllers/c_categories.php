<?php
namespace App\Controllers;

use App\Models\m_categories;

class c_categories extends BaseController {
    public $m_categories;

    public function __construct()
    {
        $this->m_categories = new m_categories();
    }

    public function list_categories () {
        $categories = $this->m_categories->loadAllCategories();
        // $categories['title'] = 'Danh sách danh mục';

        // $title = "Danh sách danh mục";
        // $view = "./app/views/categories/v_listCategories.php";
        // include "./templates/layout.php";
        $this->render("categories.v_listCategories", compact("categories"));
    }

    public function add_category () {

        if (isset($_POST['btn_addCategory'])) {
            $name_cate = $_POST['name_cate'];
            $err = [];

            if ($name_cate == "") {
                $err['name_cate'] = "Bạn chưa nhập tên danh mục";
            }

            if (empty($err)) {
                $this->m_categories->addCategory($name_cate);
                header("location: listCategories");
            }
        }

        // $title = "Thêm danh mục";
        // $view = "./MVC/views/categories/v_addCategory.php";
        // include "./templates/layout.php";
        $this->render("categories.v_addCategory");
    }

    public function edit_category () {
        $id = $_GET['id_category'];
        $category = $this->m_categories->loadOneCategory($id);

        if (isset($_POST['btn_editCategory'])) {
            $name_cate = $_POST['name_cate'];
            
            $err = [];

            if ($name_cate == "") {
                $err['name_cate'] = "Bạn chưa nhập tên sản phẩm";
            }
            
            if (empty($err)) {
                $this->m_categories->editCategory($id, $name_cate);
                header("location: listCategories");
            }
        }

        // $title = "Sửa thông tin danh mục";
        // $view = "./MVC/views/categories/v_editCategory.php";
        // include "./templates/layout.php";
        $this->render("categories.v_editCategory", compact('category'));
    }

    public function delete_category () {
        $id = $_GET['id_category'];
        $this->m_categories->deleteCategory($id);

        header("location:listCategories");
    }
}
?>