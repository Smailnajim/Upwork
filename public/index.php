<?php
session_start();
require "./../vendor/autoload.php";


use App\Controllers\Front\UserController;
$userController = new UserController;

$path = $_SERVER['REQUEST_URI'];

$path = str_replace('/UpWork/public', '', $path);

switch ($path) {
    case '/':
        $userController->index();
        break;

    case '/login':
        $userController->viewLogin();
        break;

    case '/register':
        if($_SERVER['REQUEST_METHOD'] == 'POST'){

            $_SESSION['role'] = 'client';
            $_SESSION['Lastname'] = $_POST['LastName'];
            $_SESSION['Firstname'] = $_POST['FirstName'];
            $_SESSION['email'] = $_POST['email'];
            $imagePath = './../../public/src/imeges/z';
            $userController->register($_POST['LastName'], $_POST['FirstName'], $_POST['email'], $_POST['Password'], $imagePath);
            header('location: /UpWork/public/');

        }else if($_SERVER['REQUEST_METHOD'] == 'GET'){

            $userController->viewRegister();
        }
        break;
        

    case '/messanger':
        require_once '../App/View/Messanger.php';
        break;

    default:
        echo 'your path :' . $path;
}
if ($path = '') $path = 'Home';
