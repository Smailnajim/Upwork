<?php

namespace App\controllers\Back;

use App\Models\Projet;
use App\Models\Role;
use App\Controller;
use Exception;

class ProjetController extends Controller{

    private Projet $projet;
    private Role $role;

    public function __construct() {
        $this->projet = new Projet;
        $this->role = new Role;
    }

    public function create(){
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $Client = $this->role->getByName($_POST['Client'])->getId();
            $freelancer = $this->role->getByName($_POST['freelancer'])->getId();

            try {

                $this->projet->create([
                    'titre' => 'titre'
                ]);

            } catch (Exception $e) {
                die("Erreur de base de données : " . $e->getMessage());
            }
        }
    }
}