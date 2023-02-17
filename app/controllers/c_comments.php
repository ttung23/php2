<?php
namespace App\Controllers;

use App\Models\m_comments;

class c_comments extends BaseController {
    protected $m_comments;

    public function __construct() {
        $this->m_comments = new m_comments();
    }

    public function list_comments () {
        $comments = $this->m_comments->loadAllComments();

        // $title = "Danh sách bình luận";
        // $view = "./app/views/cmt/v_listComments.php";
        // include "./templates/layout.php";
        $_SESSION['title'] = "Danh sách bình luận";
        $this->render('cmt.v_listComments', compact('comments'));
    }

    public function delete_cmt ($id) {

        $this->m_comments->deleteComment($id);
        // header("location: listComments");
        redirect("success", "Xóa bình luận thành công", "listComments");
    }
}
?>