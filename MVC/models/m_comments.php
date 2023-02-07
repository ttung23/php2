<?php
namespace App\models;
require_once ("vendor/autoload.php");

// require_once "db.php";

class m_comments extends db {
    public function loadAllComments () {
        $sql = "SELECT * FROM comments";
        return $this->getData($sql);
    }

    public function loadOneComment ($id) {
        $sql = "SELECT * FROM comments WHERE id = $id";
        return $this->getData($sql, false);
    }

    public function deleteComment ($id) {
        $sql = "DELETE FROM comments WHERE id = $id";
        $this->getData($sql, false);
    }
}
?>