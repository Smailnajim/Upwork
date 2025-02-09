<?php
require "./../vendor/autoload.php";

use App\Controllers\Front\HomeController;
use App\Controllers\Front\LoginController;
use App\Controllers\Front\RegisterController;


$path = $_SERVER['REQUEST_URI'];

$path = str_replace('/UpWork/public/', '', $path);  //if you are using wamp/xamp... 


switch ($path){
    case '':
        $homeController = new HomeController();
        $homeController->index();
        break;

    case 'login':
        $loginController = new LoginController();
        $loginController->viewLogin();
        break;

    case 'register':
        $registerController = new RegisterController();
        $registerController->viewRegister();
        break;
    default:
        echo 'your path :'.$path;
}