<?php
require_once "vendor/autoload.php";
// use App\controllers\c_products;

$products = new \App\controllers\c_products();
$categories = new \App\controllers\c_categories();
$staffs = new \App\controllers\c_staffs();
$users = new \App\controllers\c_users();
$commnents = new \App\controllers\c_commnents();


// require_once("MVC/controllers/c_products.php");
// require_once("MVC/controllers/c_categories.php");
// require_once("MVC/controllers/c_staffs.php");
// require_once("MVC/controllers/c_users.php");
// require_once("MVC/controllers/c_comments.php");

// use App\controllers\c_products;

// use App\controllers\c_products;

// use App\controllers\c_products;




// use App\controllers\c_categories;
// use App\controllers\c_commnents;
// use App\controllers\c_products;
// use App\controllers\c_staffs;
// use App\controllers\c_users;


$url = $_GET['url'] ?? "/";



switch ($url) {
    // PRODUCTS
    case "addProduct":
        $products->add_product();
        break;
    case "editProduct":
        $products->edit_product();
        break;
    case "deleteProduct":
        $products->delete_product();
        break;

    // CATEGORIES
    case "listCategories":
        $categories->list_categories();
        break;
    case "addCategory":
        $categories->add_category();
        break;
    case "editCategory":
        $categories->edit_category();
        break;
    case "deleteCategory":
        $categories->delete_category();
        break;

    // STAFFS
    case "listStaffs":
        $staffs->list_staffs();
        break;
    case "addStaff":
        $staffs->add_staff();
        break;
    case "editStaff":
        $staffs->edit_staff();
        break;
    case "deleteStaff":
        $staffs->delete_staff();
        break;

    // USERS
    case "listUsers":
        $users->list_users();
        break;
    case "editUser":
        $users->edit_user();
        break;
    case "deleteUser":
        $users->delete_user();
        break;

    // COMMENTS
    case "listComments":
        $commnents->list_comments();
        break;
    case "deleteComment":
        break;

    // LIST PRODUCTS
    default:
        $products->list_products();
        break;
}
?>