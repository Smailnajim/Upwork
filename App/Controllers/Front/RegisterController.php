<?php
namespace App\Controllers\Front;
use App\Controllers\Front\FrontController;

class RegisterController extends FrontController{
    public function viewRegister(){
        $this->layotHead('Register');
        echo $this->twig->render('Register.twig');
        $this->layotFoter();
        
    }
}