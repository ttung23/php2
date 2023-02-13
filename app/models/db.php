<?php
namespace App\Models;

use PDO;

class db {
    public $connect;

    public function __construct()
    {
        $this->connect = $this->getConnect();
    }

    // tạo kết nối từ project php sang mysql
    function getConnect(){
        $connect = new PDO("mysql:host=" . DBHOST
            . ";dbname=" . DBNAME
            . ";charset=" . DBCHARSET,
            DBUSER,
            DBPASS
        );
        return $connect;
    }

    // nếu như dùng để lấy danh sách thì truyền true hoặc ko truyền
    // truyền false sẽ chạy được các câu truy vấn như thêm sửa xóa
    function getData($query, $getAll = true){
        $this->connect = $this->getConnect();

        $stmt = $this->connect->prepare($query);
        $stmt->execute();
        if($getAll){
            return $stmt->fetchAll(PDO::FETCH_OBJ);
        }

        return $stmt->fetch(PDO::FETCH_OBJ);
    }
}
