<?php

namespace App\Models;
class Role extends Model{

    private int $id;
    private string $role;
    private string $tablename = "roles";

    public function __construct() {
        
    }

    public function getId(){
        return $this->id;
    }

    public function getRole(){
        return $this->role;
    }

    

    public function setId(int $id){
        $this->id = $id;
    }

    public function setRole(string $role){
        $this->role = $role;
    }

}