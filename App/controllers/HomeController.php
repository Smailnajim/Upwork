<?php

namespace App\Controllers;

use App\Controller;
use App\Models\User;

class HomeController extends Controller
{
    public function index()
    {
        $Users = [
            new User('', 'aymen', 'jebrane', 'ay5jbr2023@gmail.com', '21254'),
            new User('', 'salma', 'tergui', 'salma.tergui@gmail.com', '78945'),
            new User('', 'smail', 'najjim', 'smail.najjim@gmail.com', '3548961')
        ];
        $this->render('index', ['Users' => $Users]);
    }
}