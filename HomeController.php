<?php

class HomeController {
    public function execute() {
        $this->index();
    }

    public function index() {
        include "views/home.php";
    }
}
?>
