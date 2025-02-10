<?php

namespace App\Models;
use App\Core\DataBase;
use PDO;

class RoleModel{
    private $id;
    private $name; 
    private static $selfR;


    private function __construct()
    {
    }

    public static function newSelf()
    {
        if(!self::$selfR){
            self::$selfR = new self();
        }
        return self::$selfR;
    }

    public function setid($id){
        $this->id = $id;
    }

    public function setname($name){
        $this->name = $name;
    }
    
    public function addRole($name){
        $stmt = DataBase::getInstance()->getConexion()->prepare('INSERT INTO roles (name) VALUES (:name)');
        $stmt->bindParam(':name', $name);
        $this->id = DataBase::getInstance()->getConexion()->lastInsertId();
        $stmt->execute();
    }

    public function getRoleById($id){
        $stmt = DataBase::getInstance()->getConexion()->prepare('SELECT name FROM roles WHERE id = :id');
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        return $stmt->fetchColumn();
    }
}

