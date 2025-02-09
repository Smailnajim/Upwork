<?php
namespace App\Controllers\Front;
use App\Controllers\Front\FrontController;

class LoginController extends FrontController{

    public function viewLogin(){
        $this->layotHead('Login');
        echo $this->twig->render('Login.twig');
        $this->layotFoter();
        
    }
}