<?php
namespace App\utils;
use App\controllers\Back\UserController;
use App\controllers\Back\RoleController;
// use App\Models\Role;

class Test {

    private $roleController;
    private $userController;


    public function __construct() {
        // $this->roleController = new RoleController();
    }


    public function test(){


        // $this->role = new Role();
        $this->roleController = new RoleController();
        $this->userController = new UserController();

        // echo "i'm here";

        // $this->roleController->create("Admin");
        // var_dump($this->roleController->create("Client"));
        // var_dump($this->roleController->create("Client"));

        // $this->roleController->update("freelance", "freelancer");



        // $this->roleController->getAll();
        // var_dump($this->roleController->getAll());

        // $this->roleController->delete("Client");

        // $this->roleController->getByName("Client");

        $this->userController->create("aymen", "jebrane", "aymenjaymen@gmail.com", "5506", "url.png", "Client", "this is bio", "this is portfolio");





    }
}

// $role = new Test();