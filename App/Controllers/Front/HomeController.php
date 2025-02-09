<?php
namespace App\Controllers\Front;

class HomeController {
    public function index() {
        include_once "./../App/View/Home.php";
    }
}