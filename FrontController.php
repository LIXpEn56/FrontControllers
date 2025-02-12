<?php

class FrontController {
    public function __construct() {
        $this->handleRequest();
    }

    public function handleRequest() {
        $action = isset($_GET['action']) ? $_GET['action'] : 'home';

        // Convertir la primera letra a mayúscula para coincidir con el nombre del controlador
        $controllerName = ucfirst(strtolower($action)) . 'Controller';
        $controllerFile = "controllers/" . $controllerName . ".php";

        if (file_exists($controllerFile)) {
            require_once $controllerFile;
            $controller = new $controllerName();
            $controller->execute();
        } else {
            require_once "controllers/ErrorController.php";
            $errorController = new ErrorController();
            $errorController->execute();
        }
    }
}
?>
