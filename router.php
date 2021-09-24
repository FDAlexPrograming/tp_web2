<?php
require_once "Controller/HomeController.php";

define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');


// lee la acción
if (!empty($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = 'home'; // acción por defecto si no envían
}

$HomeController = new HomeController();

$params = explode('/', $action);


switch ($params[0]) {
    case 'home': 
       $HomeController->home();
        break;
    case 'suscripcion': 
        $HomeController->suscripcion();
            break;   
    case 'posiciones': 
        $HomeController->posiciones();
            break;    
    case 'entradas': 
        $HomeController->entradas();
            break;   
    default:
        echo '404 Page noy fouud';
        break;   
}
