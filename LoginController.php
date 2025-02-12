<?php

class LoginController {
    public function execute() {
        $this->login();
    }

    public function login() {
        include "views/login.php";
    }
}
?>
