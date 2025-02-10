<?php
namespace App\Controllers\Front;
use App\Controllers\Front\FrontController;
use App\Models\RegisterModel;

class RegisterController extends FrontController{

    public function  viewRegister(){
        include_once "./../App/View/Register.php";
    }

    public function viewRegisterC(){
        $this->layotHead('Register');
        echo $this->twig->render('Register.twig');
        $this->layotFoter();
        
    }

    public function addNewUser($LastName, $FirstName, $email, $Password, $image){
        RegisterModel::newSelf()->addNewUser($LastName, $FirstName, $email, $Password, $image);
    }
}