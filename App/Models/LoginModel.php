<?php

namespace App\Models;
use App\Core\DataBase;
use PDO;
use App\Models\UserModel;


class LoginModel{
    private static $selfL;
    private function __construct()
    {
        
    }

    public static function newSelf()
    {
        if(!self::$selfL){
            self::$selfL = new self();
        }
        return self::$selfL;
    }

    public function arievUser($email, $Password){
        $stmt = DataBase::getInstance()->getConexion()->prepare('SELECT * FROM users WHERE email = :email and Password = :Password');
        $stmt->bindParam(':email',$email);
        $stmt->bindParam(':Password',$Password);
        $stmt->execute();
        // var_dump($stmt->fetch());
        return $stmt->fetch(PDO::FETCH_CLASS, \UserModel);
    }
}