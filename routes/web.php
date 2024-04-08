<?php

use App\Http\Controllers\JiriController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;

/** @var Core\Router $router */
$router->get('/', [JiriController::class, 'index']);

$router->get('/jiris', [JiriController::class, 'index']);

$router->get('/jiri', [JiriController::class, 'show']);

$router->get('/jiri/create', [JiriController::class, 'create']);
$router->post('/jiri', [JiriController::class, 'store'])->csrf();

$router->get('/jiri/edit', [JiriController::class, 'edit']);
$router->patch('/jiri', [JiriController::class, 'update'])->csrf();


$router->delete('/jiri', [JiriController::class, 'destroy'])->csrf();

$router->get('/login', [LoginController::class, 'store']);
$router->post('/login', [LoginController::class, 'store']);

$router->get('/register', [RegisterController::class, 'create']);
$router->post('/register', [RegisterController::class, 'create']);
