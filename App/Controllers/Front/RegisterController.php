<?php
namespace App\Controllers\Front;
use App\Controllers\Front\FrontController;

class RegisterController extends FrontController{
    public function  viewRegister(){
        include_once "./../App/View/Register.php";
    }

    public function viewRegisterC(){
        $this->layotHead('Register');
        echo $this->twig->render('Register.twig');
        $this->layotFoter();
        
    }
}