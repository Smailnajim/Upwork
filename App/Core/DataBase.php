<?php

namespace App\Core;
use PDO;
use PDOException;

// class DataBase{
//     private static $host = "localhost";
//     private static $dbname = "Upwork_db";
//     private static $user = "postgres";
//     private static $code = "";

//     private static $conexion;
//     private static $instance;


//     private function __construct(){
//         try {
//             $dsn = "pgsql:host=".self::$host."dbname=".self::$dbname;
//             self::$conexion = new PDO($dsn, self::$user, self::$code);
//             self::$conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

//         } catch (PDOException $e) {
//             die("error conexion :".$e->getMessage()) ;
//         }
//     }

//     public function getInstance(){
//         if(!isset(self::$instance)){
//             self::$instance = new self();
//         }
//         return self::$instance;
//     }


//     public function getConexion(){
//         return self::$conexion;
//     }

// }


// class Database {
    // private static $servername = "localhost";
    // private static $username = "postgres";
    // private static $password = "";
    // private static $dbname = "Upwork";
    // private static $connexion;
    // private static $instance;
    // // public static $counter = 0;


    // private function __construct(){
    //     if (!self::$connexion) {
    //         try {
    //             self::$connexion = new PDO(
    //                 "mysql:host=" . self::$servername . 
    //                 ";dbname=" . self::$dbname . 
    //                 ";charset=UTF8",
    //                 self::$username,
    //                 self::$password
    //             );
    //             // echo "seccuss";
    //             self::$connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //         } catch (PDOException $e) {
    //             die("Connection failed: " . $e->getMessage());
    //             echo "failed";
    //         }
    //     }
        
    // }

    // public static function getInstance() {
    //     if(!self::$instance){
    //         self::$instance = new Database();
    //         // self::$counter++;
    //     }
    //         return self::$instance ;
    //     }
        
    //     public function getConnection(){
    //         return self::$connexion;
    //     }



       
// }

class Database {
    private static $servername = "localhost";
    private static $port = "5555";
    private static $username= "postgres";
    private static $password = "5506";
    private static $dbname = "upwork";
    private static $connexion;
    private static $instance;

    private function __construct(){
        if (!self::$connexion) {
            try {
                self::$connexion = new PDO("pgsql:host=".self::$servername.";port=".self::$port." dbname=".self::$dbname.";",self::$username,self::$password);
                self::$connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                echo("connexion done with no issues");
            } catch (PDOException $e) {
                echo'Error:'.$e;
            }
        }

    }

    public static function getInstance() {
        if(!self::$instance){
            self::$instance = new Database();
        }
            return self::$instance ;
        }

        public function getConnection(){
            return self::$connexion;
        }


}

Database::getInstance()->getConnection();

// phpinfo();