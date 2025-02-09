<?php
namespace App\Controllers\Front;
use App\Controllers\Front\FrontController;

class LoginController extends FrontController{

    public function viewLogin(){
        $this->layotHead();
        include_once "./../App/View/Login.php";
        $this->layotFoter();
        
    }
}