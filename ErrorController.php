<?php

class ErrorController {
    public function execute() {
        $this->errorPage();
    }

    public function errorPage() {
        include "views/error.php";
    }
}
?>
