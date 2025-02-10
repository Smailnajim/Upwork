<?php

namespace App\Models;

class Utilisateur extends Model
{

    private int $id = 0;
    private string $firstName;
    private string $lastName;
    private string $email;
    private string $password;
    // private string $phone;
    private string $photo;
    private string $bio;
    private string $portfolio;
    private Role $role;

    private string $tablename = "users";



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
        $this->firstName = $firstName;
    }

    public function setLastname(string $lastName): void
    {
        $this->lastName = $lastName;
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

    public function setRole(Role $role): void
    {
        $this->role = $role;
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
        return $this->firstName;
    }

    public function getLastname(): string
    {
        return $this->lastName;
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

    public function getRole(): Role
    {
        return $this->role;
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



}
