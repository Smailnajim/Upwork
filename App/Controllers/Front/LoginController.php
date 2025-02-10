<?php
namespace App\Controllers\Front;
use App\Controllers\Front\FrontController;
use App\Models\UserModel;

class LoginController extends FrontController{

    public function  viewLogin(){
        include_once "./../App/View/Login.php";
    }

    public function viewLoginC(){
        $this->layotHead('Login');
        echo $this->twig->render('Login.twig');
        $this->layotFoter();
        
    }
    
    public function login($email, $Password){
        $userModel = new UserModel();
        return $userModel->login($email, $Password);
    }
}