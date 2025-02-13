<?php


namespace App\Models;


use App\Core\DataBase;
use PDO;
use PDOException;

class Projet {
    private int $id;
    private string $titre;
    private string $description;
    private string $budget;
    private string $duration;
    private array $categorie;
    private int $id_client;
    private int $id_freelance;

    public function __construct() {
        
    }

    public function getId() {
      return $this->id;
    }
    public function setId($value) {
      $this->id = $value;
    }

    public function getTitre() {
      return $this->titre;
    }
    public function setTitre($value) {
      $this->titre = $value;
    }

    public function getDescription() {
      return $this->description;
    }
    public function setDescription($value) {
      $this->description = $value;
    }

    public function getBudget() {
      return $this->budget;
    }
    public function setBudget($value) {
      $this->budget = $value;
    }

    public function getDuration() {
      return $this->duration;
    }
    public function setDuration($value) {
      $this->duration = $value;
    }

    public function getCategorie() {
      return $this->categorie;
    }
    public function setCategorie($value) {
      $this->categorie = $value;
    }

    public function getId_client() {
      return $this->id_client;
    }
    public function setId_client($value) {
      $this->id_client = $value;
    }

    public function getId_freelance() {
      return $this->id_freelance;
    }
    public function setId_freelance($value) {
      $this->id_freelance = $value;
    }

    public function create(array $data){
        try {

            $query = "INSERT INTO projects(titre, description, id_client, id_freelance, budget, duration, categorie) VALUES (?, ?, ?, ?, ?, ?, ?);";

            $stmt = Database::getInstance()->getConnection()->prepare($query);
            $stmt->execute([$data['titre'], $data['description'], $data['id_client'], $data['id_freelance'], $data['budget'], $data['duration'], $data['categorie']]);
            echo "Data created successfully!";
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }
}