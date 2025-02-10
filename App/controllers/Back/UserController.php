<?php

namespace App\controllers\Back;

use App\Models\Utilisateur;
use App\Models\Role;

class UserController
{
    // public function index(){
    //     echo 'this is controller';
    // }


    private Utilisateur $user;
    private Role $role;
    // private Utilisateur $seconduser;
    // // private RoleService $roleService;
    // private RoleController $roleController;
    // private UserService $userService;

    public function __construct()
    {
        
        // $this->seconduser = new Utilisateur();
        $this->role = new Role;

        // $this->userService = new UserService();
        // $this->roleController = new RoleController();
    }

    public function create($firstName, $lastName, $email, $password, $photo, $rolename, $bio, $portfolio)
    {

        $role = $this->role->getByName($rolename);
        // var_dump($role);
        // die;
        // $this->role = new Role();
        $this->user = new Utilisateur(
            $firstName,
            $lastName,
            $email,
            $password,
            $photo,
            // $phone,
            $bio,
            $portfolio,
            $role
        );
        var_dump($this->user);
        die;
        // $this->user->BuildUser(
        //     $firstName,
        //     $lastName,
        //     $email,
        //     $password,
        //     $photo,
        //     // $phone,
        //     $bio,
        //     $portfolio,
        //     $role
        // );



        try {
            $user = $this->userService->create($this->user);
            return $user;
        } catch (Exception $e) {
            die("Erreur de base de données : " . $e->getMessage());
        }
    }
}
