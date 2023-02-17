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

        // $title = "Danh sách danh mục";
        $_SESSION['title'] = "Danh sách danh mục";
        $this->render("categories.v_listCategories", compact("categories"));
    }

    public function add_category () {

        deleteSession();
        if (isset($_POST['btn_addCategory'])) {
            $name_cate = $_POST['name_cate'];
            
            $err = [];

            if ($name_cate == "") {
                $err['name_cate'] = "Bạn chưa nhập tên danh mục";
            }

            if (count($err) > 0) {
                $_SESSION['err'] = $err;
            } else {
                $this->m_categories->addCategory($name_cate);
                // deleteSession();
                // header("location: listCategories");

                redirect('success', 'Thêm danh mục thành công', 'list-categories');
            }
        }

        // $title = "Thêm danh mục";
        $_SESSION['title'] = "Thêm danh mục";
        $this->render("categories.v_addCategory");
    }

    public function edit_category ($id) {
        $category = $this->m_categories->loadOneCategory($id);

        deleteSession();
        if (isset($_POST['btn_editCategory'])) {
            $name_cate = $_POST['name_cate'];
            
            $err = [];

            if ($name_cate == "") {
                $err['name_cate'] = "Bạn chưa nhập tên sản phẩm";
            }
            
            if (empty($err)) {
                $this->m_categories->editCategory($id, $name_cate);
                redirect('success', 'Sửa thông tin danh mục thành công', 'list-categories');
            }
        }

        // $title = "Sửa thông tin danh mục";
        $_SESSION['title'] = "Sửa thông tin danh mục";
        $this->render("categories.v_editCategory", compact('category'));
    }

    public function delete_category ($id) {
        $this->m_categories->deleteCategory($id);

        redirect("success", "Xóa danh mục thành công", "list-categories");
    }
}
?>