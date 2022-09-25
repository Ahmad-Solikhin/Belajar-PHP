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

Router::add('GET', '/', 'HomeController', 'index');

Router::add('GET', '/login', 'LoginController', 'login');

Router::run();