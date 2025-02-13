<?php

namespace App\Core;

class Router
{
    private static $postRoutes = [];
    private static $getRoutes = [];

    public function getURI(){
        $path = $_SERVER['REQUEST_URI'];
        $path = str_replace('/UpWork/public/', '', $path);
        // 
    }
}