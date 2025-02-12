<?php

namespace App\controllers\Back;
use App\Models\Role;
use App\Controller;
use Exception;

class RoleController extends Controller
{
    // private RoleService $roleService;
    private Role $role;
    // private Role $seconrRole;
    // private UserController $userController;


    public function __construct()
    {
        $this->role = new Role();
    //     $this->seconrRole = new Role();
    //     $this->roleService = new RoleService();
    }


    public function create($rolename)
    {
        // die ($rolename);

        try {
            $this->role->create($rolename);
            // die($this->role->create($rolename));
            // return $role;
        } catch (Exception $e) {
            die("Erreur de base de données : " . $e->getMessage());
        }
    }

    public function delete($rolename){

        try {
            $this->role->delete($rolename);
            // return $user;
            
        } catch (Exception $e) {
            die("Erreur de base de données : " . $e->getMessage());
        }
    }

    public function update($rolename, $updatedRole){
        
        try {
            $this->role->update($rolename, $updatedRole);
            // return $role;
            
        } catch (Exception $e) {
            die("Erreur de base de données : " . $e->getMessage());
        }

    }

    public function getAll(){
        try {
           $result = $this->role->getAll();
        //    var_dump($result);
            return $result;
            
        } catch (Exception $e) {
            die("Erreur de base de données : " . $e->getMessage());
        }
    }

    public function getByName($rolename){

        try {
            $result = $this->role->getBYName($rolename);
            
            return $result;

            
        } catch (Exception $e) {
            die("Erreur de base de données : " . $e->getMessage());
        }

    }

}
