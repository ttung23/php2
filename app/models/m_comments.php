<?php
namespace App\Models;

use App\Models\BaseModel;

class m_comments extends BaseModel {
    protected $table_name = "comments";

    public function loadAllComments () {
        $sql = "SELECT cmt.id, cmt.content, us.name, pro.name_product, cmt.created_time, cmt.updated_time FROM comments cmt 
        INNER JOIN users us ON cmt.id_user = us.id
        INNER JOIN products pro ON cmt.id_product = pro.id ";
        $this->setQuery($sql);
        return $this->loadAllRows();
    }

    public function loadOneComment ($id) {
        $sql = "SELECT * FROM $this->table_name WHERE id = ?";
        $this->setQuery($sql);
        return $this->loadRow([$id]);
    }

    public function deleteComment ($id) {
        $sql = "DELETE FROM $this->table_name WHERE id = ?";
        $this->setQuery($sql);
        $this->execute([$id]);
    }
}
?>