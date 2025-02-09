<?php
namespace App\Controllers\Front;
use App\Controllers\Front\FrontController;

class RegisterController extends FrontController{
    public function viewRegister(){
        $this->layotHead();
        include_once "./../App/View/Register.php";
        $this->layotFoter();
        
    }
}