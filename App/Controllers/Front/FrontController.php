<?php
namespace App\Controllers\Front;

class FrontController {
    protected function layotFoter(){
        include_once "./../App/View/Layot/Foter.twig";
    }

    protected function layotHead(){
        include_once "./../App/View/Layot/Head.twig";
    }
}