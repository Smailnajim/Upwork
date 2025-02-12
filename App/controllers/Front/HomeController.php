<?php
namespace App\controllers\Front;

class HomeController {
    public function index() {
        include_once "./../App/View/Home.php";
    }

    public function createC() {
        include_once "./../App/View/index.php";
    }
}