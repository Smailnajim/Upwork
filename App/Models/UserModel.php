<?php

namespace App\Models;
use App\Core\DataBase;
use PDO;

class UserModel{
    private $id;
    private $email;
    private $firstname;
    private $lastname;
    private $id_role;
    private $photo;
    private $portfolio;
    private $bio; 
    private $password ; 




    public function __construct($id, $FirstName, $LastName, $id_role, $photo, $bio, $portfolio, $email, $password)
    {
        $this->id = $id ;
        $this->lastname = $LastName ;
        $this->firstname = $FirstName ;
        $this->email = $email ;
        $this->id_role = $id_role ;
        $this->photo = $photo;
        $this->bio = $bio;
        $this->portfolio  = $portfolio;
        $this->password  = $password; 


    }

    public function setid($id){
        $this->id = $id;
    }
    
    public function addNewUser($LastName, $FirstName, $email, $Password, $image){
        $stmt = DataBase::getInstance()->getConexion()->prepare('INSERT INTO users (LastName, FirstName, email, Password, photo, id_role) VALUES (:LastName, :FirstName, :email, :Password, :photo, :id_role)');
        $stmt->bindParam(':LastName',$LastName);
        $stmt->bindParam(':FirstName',$FirstName);
        $stmt->bindParam(':email',$email);
        $stmt->bindParam(':Password',$Password);
        $stmt->bindParam(':photo',$image);
        // $stmt->bindParam(':id_role', 3);
        $stmt->bindValue(':id_role', 3,PDO::PARAM_INT);
        $stmt->execute();
    }
}

