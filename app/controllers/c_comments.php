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

        $_SESSION['title'] = "Danh sách bình luận";
        $this->render('cmt.v_listComments', compact('comments'));
    }

    public function delete_cmt ($id) {

        $this->m_comments->deleteComment($id);
        redirect("success", "Xóa bình luận thành công", "list-comments");
    }
}
?>