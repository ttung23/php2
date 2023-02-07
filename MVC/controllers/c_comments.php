<?php
namespace App\controllers;
require_once ("vendor/autoload.php");
// require_once "MVC/models/m_comments.php";
use App\models\m_comments;

class c_commnents {
    public $m_comments;

    public function __construct() {
        $this->m_comments = new m_comments();
    }

    public function list_comments () {
        $comments = $this->m_comments->loadAllComments();

        $title = "Danh sách bình luận";
        $view = "./MVC/views/cmt/v_listComments.php";
        include "./templates/layout.php";
    }

    public function delete_cmt () {
        $id = $_GET['id_commnet'];

        $this->m_comments->deleteComment($id);
        header("location: ?url=listComments");
    }
}
?>