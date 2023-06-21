<?php
use App\Controllers\HomeController;
use App\Controllers\LoginController;
use App\Controllers\SearchController;
use Pecee\SimpleRouter\SimpleRouter;

SimpleRouter::get('/', [HomeController::class, 'show']);
SimpleRouter::get('/search', [SearchController::class, 'show']);
SimpleRouter::get('login', [LoginController::class, 'show']);
SimpleRouter::post('login', [LoginController::class, 'login']);
SimpleRouter::post('logout', [LoginController::class, 'logout']);

SimpleRouter::start();