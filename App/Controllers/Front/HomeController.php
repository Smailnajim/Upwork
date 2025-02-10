<?php
namespace App\Controllers\Front;
use App\Controllers\Front\FrontController;

class HomeController extends FrontController {
    public function  index() {
        include_once "./../App/View/Home.php";
    }

    public function indexC() {
        $this->layotHead('Home');
        echo $this->twig->render('Home.twig');
        $this->layotFoter();
    }
}