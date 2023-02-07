<?php
class c_include {
    public $title;
    public $view;

    public function include_layout ($title, $view) {
        $this->title = "$title";
        $this->view = "$view";
        include "./templates/layout.php";
    }
}
?>