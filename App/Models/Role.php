<?php

namespace App\Models;

use App\Core\DataBase;
use PDO;
use PDOException;

class Role
{

    private int $id = 0;
    private string $role;

    public function __construct()
    {
        // $this->id = $id;
        // $this->role-> $role;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getRole()
    {
        return $this->role;
    }



    public function setId(int $id)
    {
        $this->id = $id;
    }

    public function setRole(string $role)
    {
        $this->role = $role;
    }


    public function create(string $name)
    {

        try {

            $query = " INSERT INTO roles (name) VALUES ('" . $name . "');";
            // die($query);
            $stmt = Database::getInstance()->getConnection()->prepare($query);
            $stmt->execute();
            echo "Data created successfully!";
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }

    public function delete($role)
    {

        try {

            $query = " DELETE FROM  roles WHERE name = '" . $role . "';";
            // die($query);
            $stmt = Database::getInstance()->getConnection()->prepare($query);
            $stmt->execute();
            echo "Data deleted successfully!";
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }

    public function update($rolename, $role)
    {

        try {
            $query = "UPDATE roles SET name = '" . $role . " 'WHERE name = '" . $rolename . "';";
            // var_dump($query);
            // die($query);
            $stmt = Database::getInstance()->getConnection()->prepare($query);
            $stmt->execute();
            echo ("data updated succefully");
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }

    public function getAll()
    {

        try {

            $query = "SELECT * FROM roles;";
            // die($query);
            $stmt = Database::getInstance()->getConnection()->prepare($query);
            $stmt->execute();
            // var_dump($query); 
            // $result = $stmt->fetchall(PDO::FETCH_CLASS);

            $result = $stmt->fetchall();

            // var_dump($result);
            return $result;
        } catch (PDOException $e) {
            echo ("Error:" . $e);
        }
    }


    public function getByName($rolename)
    {

        try {
            $query = "SELECT * FROM roles WHERE name = '" . $rolename . "' ;";
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
