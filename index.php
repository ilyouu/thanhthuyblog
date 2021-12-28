<?php
session_start();
$page = isset($_GET['page']) ? $_GET['page'] : "trangchu";
// $page = str_replace("/", "", $_SERVER['REQUEST_URI']) ? str_replace("/", "", $_SERVER['REQUEST_URI']) : "trangchu";

$blog = isset($_GET['blog']) ? $_GET['blog'] : 0;
if($blog != 0){
    require_once('Controllers/Controller.php');
    $controller_obj = new Controller();
    $controller_obj->singleblog();
} else {
    switch ($page) {
        case 'trangchu':
            require_once('Controllers/Controller.php');
            $controller_obj = new Controller();
            $controller_obj->trangchu();
            break;
        case 'blog':
            require_once('Controllers/Controller.php');
            $controller_obj = new Controller();
            $controller_obj->blog();
            break;
        case 'gioithieu':
            require_once('Controllers/Controller.php');
            $controller_obj = new Controller();
            $controller_obj->gioithieu();
            break;
        case 'lienhe':
            require_once('Controllers/Controller.php');
            $controller_obj = new Controller();
            $controller_obj->lienhe();
            break;
    
    
    
        
        
        default:
            require_once('Controllers/HomeController.php');
            $controller_obj = new Homecontroller();
            $controller_obj->list();
            break;
    }
}