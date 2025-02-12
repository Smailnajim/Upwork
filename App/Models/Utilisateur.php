<?php

namespace App\Models;


use App\Core\DataBase;
use PDO;
use PDOException;

class Utilisateur
{

    private int $id = 0;
    private string $firstname;
    private string $lastname;
    private string $email;
    private string $password;
    // private string $phone;
    private string $photo;
    private string $bio;
    private string $portfolio;
    private $id_role;

 



    public function __construct()
    {
        // $this-> = $;
    }


    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function setFirstname(string $firstName): void
    {
        $this->firstname = $firstName;
    }

    public function setLastname(string $lastName): void
    {
        $this->lastname = $lastName;
    }

    public function setEmail(string $email): void
    {
        $this->email = $email;
    }

    public function setPassword(string $password): void
    {
        $this->password = $password;
    }
    // public function setPhone(string $phone): void
    // {
    //     $this->phone = $phone;
    // }

    public function setPhoto(string $photo): void
    {
        $this->photo = $photo;
    }

    public function setRoleId($role): void
    {
        $this->id_role = $role;
    }

    public function setBio(string $bio): void
    {
        $this->bio = $bio;
    }

    public function setPortfolio(string $portfolio): void
    {
        $this->$portfolio = $portfolio;
    }


    // public function setRoleId ($role_id){
    //     $this->role_id = $role_id;
    // }

    public function getId(): int
    {
        return $this->id;
    }

    public function getFirstname(): string
    {
        return $this->firstname;
    }

    public function getLastname(): string
    {
        return $this->lastname;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    // public function getPhone(): string
    // {
    //     return $this->phone;
    // }

    public function getPassword(): string
    {
        return $this->password;
    }

    public function getRole()
    {
        return $this->id_role;
    }



    public function getPhoto(): string
    {
        return $this->photo;
    }

    public function getBio(): string
    {
        return $this->bio;
    }

    public function getPortfolio(): string
    {
        return $this->portfolio;
    }

    // public function getRoleId (){
    //     $this->role_id;
    // }
    
    public function create(array $data)
    {

        try {

            $query = " INSERT INTO users (firstName, lastName, id_role, photo, bio, portfolio, email, password) VALUES (?, ?, ?, ?, ?, ?, ?, ?);";
            // die($query);
            $stmt = Database::getInstance()->getConnection()->prepare($query);
            $stmt->execute ([$data['firstName'], $data['lastName'], $data['id_role'], $data['photo'], $data['bio'], $data['portfolio'] , $data['email'], $data['password']]);
            echo "Data created successfully!";
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }

    public function delete($data)
    {

        try {

            $query = " DELETE FROM  users WHERE firstName = ?";
            // die($query);
            $stmt = Database::getInstance()->getConnection()->prepare($query);
            $stmt->execute([$data['firstName']]);
            echo "Data deleted successfully!";
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }


    //update isn't done yet

    public function update($data)
    {

        try {
            $query = "UPDATE users SET firstname = ? AND lastname = ? AND photo = ? AND bio = ? AND portfolio = ? AND email = ? AND password = ? 'WHERE id = ?;";
            // var_dump($query);
            die($query);
            $stmt = Database::getInstance()->getConnection()->prepare($query);
            $stmt->execute([$data['firstName'], $data['lastName'], $data['photo'], $data['bio'], $data['portfolio'], $data['email'], $data['password'], $data['id']]);
            echo ("data updated succefully");
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }



    public function getAll()
    {

        try {

            $query = "SELECT * FROM users;";
            // die($query);
            $stmt = Database::getInstance()->getConnection()->prepare($query);
            $stmt->execute();
            // var_dump($query); 
            $result = $stmt->fetchAll(PDO::FETCH_CLASS, Utilisateur::class);

            // $result = $stmt->fetchall();

            // var_dump($result);
            return $result;
        } catch (PDOException $e) {
            echo ("Error:" . $e);
        }
    }

    public function getByName($user)
    {

        try {
            $query = "SELECT * FROM users WHERE firstName = '" . $user . "' ;";
            // die($query);
            $stmt = Database::getInstance()->getConnection()->prepare($query);
            $stmt->execute();
            //  var_dump($query); 
            // $result = $stmt->fetchall(PDO::FETCH_CLASS);
            $result = $stmt->fetchObject(Role::class);
            // $stmt->setFetchMode(PDO::FETCH_CLASS);
            // $result = $stmt->fetch();
            //    var_dump($result);
            return $result;
        } catch (PDOException $e) {
            echo ("Error:" . $e);
        }
    }



}
