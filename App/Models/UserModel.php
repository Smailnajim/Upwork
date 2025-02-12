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



    public function __construct()
    {

    }
    // public function __construct($id, $FirstName, $LastName, $id_role, $photo, $bio, $portfolio, $email, $password)
    // {
    //     $this->id = $id ;
    //     $this->lastname = $LastName ;
    //     $this->firstname = $FirstName ;
    //     $this->email = $email ;
    //     $this->id_role = $id_role ;
    //     $this->photo = $photo;
    //     $this->bio = $bio;
    //     $this->portfolio  = $portfolio;
    //     $this->password  = $password; 
    // }

    public function register($LastName, $FirstName, $email, $Password, $image){
        $stmt = DataBase::getInstance()->getConexion()->prepare('INSERT INTO users (LastName, FirstName, email, Password, photo, id_role) VALUES (:LastName, :FirstName, :email, :Password, :photo, :id_role)');
        $stmt->bindParam(':LastName',$LastName);
        $stmt->bindParam(':FirstName',$FirstName);
        $stmt->bindParam(':email',$email);
        $stmt->bindParam(':Password',$Password);
        $stmt->bindParam(':photo',$image);
        // $stmt->bindParam(':id_role', 3);
        $stmt->bindValue(':id_role', 3,PDO::PARAM_INT);
        $stmt->execute();
        $this->id = DataBase::getInstance()->getConexion()->lastInsertId();
    }

    public function login($emaill, $Passwordd){
        $stmt = DataBase::getInstance()->getConexion()->prepare('SELECT * FROM users WHERE email = :email and Password = :Password');
        $stmt->bindParam(':email',$emaill);
        $stmt->bindParam(':Password',$Passwordd);
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_CLASS, UserModel::class);
        return $stmt->fetch();
    }

    public function  sendMessage(string $sms){
        $stmt = DataBase::getInstance()->getConexion()->prepare('INSERT INTO chat () * FROM users WHERE email = :email and Password = :Password');
    }

    public function  vieWhoMessag(){
        $stmt = DataBase::getInstance()->getConexion()->prepare('SELECT id_to FROM chat WHERE id_from = :idFrom');
        $stmt->bindParam(':idFrom', $_SESSION['id_user']);
        $stmt->execute();
    }

    public function getid(){
        return $this->id;
    }
    public function getemail(){
        return $this->email;
    }
    public function getfirstname(){
        return $this->firstname;
    }
    public function getlastname(){
        return $this->lastname;
    }
    public function getid_role(){
        return $this->id_role;
    }
    public function getphoto(){
        return $this->photo;
    }
    public function getportfolio(){
        return $this->portfolio;
    }
    public function getbio(){
        return $this->bio;
    }
    public function getpassword(){
        return $this->password;
    }


    public function setid($id){
        $this->id = $id;
    }
    public function setemail($email){
        $this->email = $email;
    }
    public function setfirstname($firstname){
        $this->firstname = $firstname;
    }
    public function setlastname($lastname){
        $this->lastname = $lastname;
    }
    public function setid_role($id_role){
        $this->id_role = $id_role;
    }
    public function setphoto($photo){
        $this->photo = $photo;
    }
    public function setportfolio($portfolio){
        $this->portfolio = $portfolio;
    }
    public function setbio($bio){
        $this->bio = $bio;
    }
    public function setpassword($password){
        $this->password = $password;
    }
    
}

