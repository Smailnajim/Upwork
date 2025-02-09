<?php
namespace App\Controllers\Front;

use Twig\Loader\FilesystemLoader;
use Twig\Environment;

class FrontController {
    protected $twig;
    protected $loader;

    public function __constract(){
        $this->loader = new FilesystemLoader( __DIR__ . '../../templates');
        $this->twig = new Environment($this->loader);
    }

    public function in() {
        echo "im in";
    }

    protected function layotFoter(){
        echo $this->twig->rander('Foter.twig');
    }

    protected function layotHead($titel){
        echo $this->twig->render('Head.twig', ['titel' => $titel]);
        // echo $this->twig->render('Head.twig');
    }
}