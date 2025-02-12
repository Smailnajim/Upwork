<?php

namespace App\controllers\Back;

use App\Models\Utilisateur;
use App\Models\Role;
use App\Controller;
use Exception;

class UserController extends Controller
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
        $this->role = new Role();
        $this->user = new Utilisateur();

        // $this->userService = new UserService();
        // $this->roleController = new RoleController();
    }

    public function create()
    {


        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $role = $this->role->getByName($_POST['rolename'])->getId();

            try {
                $this->user->create([
                    'firstName' => $_POST['firstName'],
                    'lastName' => $_POST['lastName'],
                    'email' => $_POST['email'],
                    'password' => $_POST['password'],
                    'photo' => $_POST['photo'],
                    'id_role' => $role,
                    'bio' => $_POST['bio'],
                    'portfolio' => $_POST['portfolio']
                ]);
                $this->render('index', []);

                // return $user;
            } catch (Exception $e) {
                die("Erreur de base de données : " . $e->getMessage());
            }
        }
    }

    public function delete()
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            try {


                $this->user->delete(['firstName' => $_POST['firstName']]);
                // return $user;
                $this->render('index', []);
            } catch (Exception $e) {
                die("Erreur de base de données : " . $e->getMessage());
            }
        }
    }

    public function update()
    {
        var_dump($_POST['id']);
        die;

        try {
            // return $role;
            $this->user->update([[
                'id' => $_POST['id'],
                'firstName' => $_POST['firstName'],
                'lastName' => $_POST['lastName'],
                'email' => $_POST['email'],
                'password' => $_POST['password'],
                'photo' => $_POST['photo'],
                'bio' => $_POST['bio'],
                'portfolio' => $_POST['portfolio']
            ]]);
        } catch (Exception $e) {
            die("Erreur de base de données : " . $e->getMessage());
        }
    }

    public function getAll()
    {
        try {
            $result = $this->user->getAll();
            //    var_dump($result);
            return $result;
        } catch (Exception $e) {
            die("Erreur de base de données : " . $e->getMessage());
        }
    }

    public function getByName($user)
    {
        // var_dump($user);
        // die;
        // $this->role->get
        try {
            $result = $this->user->getBYName($user);

            return $result;
        } catch (Exception $e) {
            die("Erreur de base de données : " . $e->getMessage());
        }
    }
}
