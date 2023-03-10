<?php

use Phroute\Phroute\RouteCollector;

$url = !isset($_GET['url']) ? "/" : $_GET['url'];

$router = new RouteCollector();

// filter check đăng nhập
$router->filter('auth', function(){
    if(!isset($_SESSION['auth']) || empty($_SESSION['auth'])){
        header('location: ' . BASE_URL . 'login');die;
    }
});


// bắt đầu định nghĩa ra các đường dẫn
// PRODUCTS
$router->get('/', [App\Controllers\c_products::class, 'list_products']);
$router->get('list-products', [App\Controllers\c_products::class, 'list_products']);

$router->get('add-product', [App\Controllers\c_products::class, 'add_product']);
$router->post('form-add-product', [App\Controllers\c_products::class, 'add_product']);

$router->get('edit-product/id_product={id}', [App\Controllers\c_products::class, 'edit_product']);
$router->post('form-edit-product/id_product={id}', [App\Controllers\c_products::class, 'edit_product']);

$router->get('delete-product/id_product={id}', [App\Controllers\c_products::class, 'delete_product']);

// CATEGORIES
$router->get('list-categories', [App\Controllers\c_categories::class, 'list_categories']);

$router->get('add-category', [App\Controllers\c_categories::class, 'add_category']);
$router->post('form-add-category', [App\Controllers\c_categories::class, 'add_category']);

$router->get('edit-category/id_category={id}', [App\Controllers\c_categories::class, 'edit_category']);
$router->post('form-edit-category/id_category={id}', [App\Controllers\c_categories::class, 'edit_category']);

$router->get('delete-category/id_category={id}', [App\Controllers\c_categories::class, 'delete_category']);

// STAFFS
$router->get('list-staffs', [App\Controllers\c_staffs::class, 'list_staffs']);

$router->get('add-staff', [App\Controllers\c_staffs::class, 'add_staff']);
$router->post('form-add-staff', [App\Controllers\c_staffs::class, 'add_staff']);

$router->get('edit-staff/id_staff={id}', [App\Controllers\c_staffs::class, 'edit_staff']);
$router->post('form-edit-staff/id_staff={id}', [App\Controllers\c_staffs::class, 'edit_staff']);

$router->get('delete-staff/id_staff={id}', [App\Controllers\c_staffs::class, 'delete_staff']);

// USERS
$router->get('list-users', [App\Controllers\c_users::class, 'list_users']);

$router->get('edit-user/id_user={id}', [App\Controllers\c_users::class, 'edit_user']);
$router->post('form-edit-user/id_user={id}', [App\Controllers\c_users::class, 'edit_user']);

$router->get('delete-user/id_user={id}', [App\Controllers\c_users::class, 'delete_user']);

// COMMENTS
$router->get('list-comments', [App\Controllers\c_comments::class, 'list_comments']);
$router->get('delete-comment/id_comment={id}', [App\Controllers\c_comments::class, 'delete_cmt']);
// tạo route có link add_product gọi vào phương thức add của c_product

# NB. You can cache the return value from $router->getData() so you don't have to create the routes each request - massive speed gains
$dispatcher = new Phroute\Phroute\Dispatcher($router->getData());

$response = $dispatcher->dispatch($_SERVER['REQUEST_METHOD'], $url);

// Print out the value returned from the dispatched function
echo $response;


?>