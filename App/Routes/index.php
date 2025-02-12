<?php


use App\Controllers\Front\HomeController;
use App\Router;
use App\controllers\Back\UserController;
use App\Models\Utilisateur;

$router = new Router();

// $router->get('/', HomeController::class, 'index');
// $router->get('/create', HomeController::class, 'createC');
$router->post('/delete', UserController::class, 'delete');
$router->post('/update', UserController::class, 'update');

$router->post('/create', UserController::class, 'create');
// $router->get('/create', ArticleController::class, 'create');
// $router->get('/articles', ArticleController::class, 'findAll');

$router->dispatch();
