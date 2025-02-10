<?php
require "./../vendor/autoload.php";

use App\Controllers\Front\HomeController;
use App\Controllers\Front\UserController;


$path = $_SERVER['REQUEST_URI'];

$path = str_replace('/UpWork/public/', '', $path);

switch ($path) {
    case '':
        $homeController = new HomeController();
        $homeController->index();
        break;

    case 'login':
        $userController = new UserController;
        $userController->viewLogin();
        break;

    case 'register':
        $userController = new UserController;
        $userController->viewRegister();
        break;

    case 'messanger':
        require_once '../App/View/Messanger.php';
        break;

    default:
        echo 'your path :' . $path;
}
if ($path = '') $path = 'Home';
