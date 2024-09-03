<?php

require_once __DIR__ . '/../app/controllers/UsuarioController.php';

$controller = $_GET[ 'c' ] ?? 'Usuario';
$action = $_GET[ 'a' ] ?? 'index';

$controllerClass = $controller . 'Controller';

if ( class_exists( $controllerClass ) && method_exists( $controllerClass, $action ) ) {
    $controllerInstance = new $controllerClass();
    $controllerInstance->$action();
} else {
    echo 'Página não encontrada!';
}