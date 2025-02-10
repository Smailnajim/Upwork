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

    public function arievUser($emaill, $Passwordd){
        $stmt = DataBase::getInstance()->getConexion()->prepare('SELECT * FROM users WHERE email = :email and Password = :Password');
        $stmt->bindParam(':email',$emaill);
        $stmt->bindParam(':Password',$Passwordd);
        $stmt->execute();
        // var_dump($stmt->fetch());
        // return $stmt->fetch(PDO::FETCH_CLASS, 'UserModel');

        $r = $stmt->setFetchMode(PDO::FETCH_CLASS, UserModel::class);
        // $r=$stmt->fetch();
        var_dump($stmt->fetch());
        die;

    }
}