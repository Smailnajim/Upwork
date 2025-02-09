<?php
namespace App\Controllers\Front;
use App\Controllers\Front\FrontController;

class HomeController extends FrontController {

    public function index() {
        $this->layotHead();
        include_once "./../App/View/Home.php";
        $this->layotFoter();
    }

}