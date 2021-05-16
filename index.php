<?php 
    $action = $_GET['action'];
    $control = $_GET['controller'];
    $controllerName = $control . 'Controller';
    require_once('./controller/' . $controllerName .'.php');

    $controller = new $controllerName();
    $controller->$action();

?>