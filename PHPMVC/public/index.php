<?php
/*
 * Ini router sederhana
 * */
////Inisiasi path default
//$path = "/index";
//
////mengecek path info
//if(isset($_SERVER['PATH_INFO'])){
//    $path = $_SERVER['PATH_INFO'];
//}
//
////Jadi ini naik ke directory view trus buka file di view sesuai dengan path infonya
//require __DIR__ . '/../app/View' . $path . '.php';

require_once __DIR__.'/../vendor/autoload.php';

use BelajarPHPMVC\App\Router;
use BelajarPHPMVC\Controller\HomeController;
use BelajarPHPMVC\Controller\ProductController;
use BelajarPHPMVC\Middleware\AuthMiddleware;

Router::add('GET', '/products/([0-9a-zA-Z]*)/category/([0-9a-zA-Z]*)', ProductController::class, 'category');

Router::add('GET', '/', HomeController::class, 'index');

Router::add('GET', '/hello', HomeController::class, 'hello', [AuthMiddleware::class]);

Router::add('GET', '/world', HomeController::class, 'world', [AuthMiddleware::class]);

Router::run();