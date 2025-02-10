<?php
namespace App\Controllers\Front;
use App\Controllers\Front\FrontController;
use App\Models\UserModel;

class UserController extends FrontController{

    public function  viewLogin(){
        include_once "./../App/View/Login.php";
    }
    public function  viewRegister(){
        include_once "./../App/View/Register.php";
    }
    
    public function login($email, $Password){
        $userModel = new UserModel;
        return $userModel->login($email, $Password);
    }
    public function register($LastName, $FirstName, $email, $Password, $image){
        $userModel = new UserModel;
        $userModel->register($LastName, $FirstName, $email, $Password, $image);
    }
}