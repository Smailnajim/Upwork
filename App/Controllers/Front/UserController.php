<?php
namespace App\Controllers\Front;
use App\Models\UserModel;

class UserController {
    private $userModel;

    public function __construct()
    {
        $this->userModel = new UserModel;
    }


    
    public function  index() {
        include_once "./../App/View/Home.php";
    }

    public function  viewLogin(){
        include_once "./../App/View/Login.php";
    }

    public function  viewRegister(){
        include_once "./../App/View/Register.php";
    }

    public function  viewMessanger(){
        include_once '../App/View/Messanger.php';
    }

    public function  vieWhoMessag(){
        // don't ceare about role he can't see this part of code
        $this->userModel->vieWhoMessag();
    }

    public function login($email, $Password){
        return $this->userModel->login($email, $Password);
    }

    public function register($LastName, $FirstName, $email, $Password, $image){

        $this->userModel->register($LastName, $FirstName, $email, $Password, $image);

        $_SESSION['role'] = 'client';
        $_SESSION['id_user'] = $this->userModel->getid();
        $_SESSION['Lastname'] = $LastName;
        $_SESSION['Firstname'] = $FirstName;
        $_SESSION['email'] = $email;
    }


    public function  sendMessage(string $sms){
        ;
    }
}