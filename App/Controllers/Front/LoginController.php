<?php
namespace App\Controllers\Front;
use App\Controllers\Front\FrontController;
use App\Models\LoginModel;

class LoginController extends FrontController{

    public function  viewLogin(){
        include_once "./../App/View/Login.php";
    }

    public function viewLoginC(){
        $this->layotHead('Login');
        echo $this->twig->render('Login.twig');
        $this->layotFoter();
        
    }

    
    public function arievUser($email, $Password){
        return LoginModel::newSelf()->arievUser($email, $Password);
    }
}