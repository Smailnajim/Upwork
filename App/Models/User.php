<?php

namespace App\Models;

class User
{
    private $id = 0;
    private $first_name;
    private $last_name;
    private $email;
    private $password;

    public function __construct($id, $first_name, $last_name, $email, $password)
    {
        $this->id = $id;
        $this->first_name = $first_name;
        $this->last_name = $last_name;
        $this->email = $email;
        $this->password = $password;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function setFirstname(string $first_name): void
    {
        $this->first_name = $first_name;
    }

    public function setLastname(string $last_name): void
    {
        $this->last_name = $last_name;
    }

    public function setEmail(string $email): void
    {
        $this->email = $email;
    }

    public function setPassword(string $password): void
    {
        $this->password = $password;
    }





    public function getId(): int
    {
        return $this->id;
    }

    public function getFirstname(): string
    {
        return $this->first_name;
    }

    public function getLastname(): string
    {
        return $this->last_name;
    }

    public function getEmail(): string
    {
        return $this->email;
    }
    public function getPassword(): string
    {
        return $this->password;
    }
}
