<?php
namespace App\Controllers\Front;

use Twig\Loader\FilesystemLoader;
use Twig\Environment;

class FrontController {
    protected $twig;
    protected $loader;

    protected function __constract(){
        $this->loader = new FilesystemLoader('./../../templates');
        $this->twig = new Environment($this->loader);
    }
    protected function layotFoter(){
        echo $this->twig->rander('Foter.twig');
    }

    protected function layotHead($titel){
        echo $this->twig->render('Head.twig', ['titel' => $titel]);
    }
}