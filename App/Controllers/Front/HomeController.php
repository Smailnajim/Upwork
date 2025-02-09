<?php
namespace App\Controllers\Front;

class HomeController {

    public function index() {
        $this->layotHead();
        include_once "./../App/View/Home.php";
        $this->layotFoter();
    }

    private function layotFoter(){
        include_once "./../App/View/Layot/Foter.twig";
    }

    private function layotHead(){
        include_once "./../App/View/Layot/Head.twig";
    }
}