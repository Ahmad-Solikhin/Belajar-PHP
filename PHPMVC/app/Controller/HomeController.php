<?php

namespace BelajarPHPMVC\Controller;

use BelajarPHPMVC\App\View;

class HomeController
{
    function index(){

        $model = [
            'title' => 'Test',
            'content' => 'Ini merupakan coba menggunakan Model'
        ];

        //Untuk mengirim data ke view nya, jadi variable model ini bisa diakses di view
        //require __DIR__ . '/../View/Home/index.php';

        //Cara kedua kalo mau pake function yang ada di view
        View::render('Home/index', $model);
    }

    function hello(){
        echo "HomeController.hello()";
    }

    function world()
    {
        echo "HomeController.world()";
    }

    function login()
    {
        $request = [
            'username' => $_POST['usernmae'],
            'password' => $_POST['password']
        ];

        $user = [

        ];

        $response = [
            'massage' => 'Login sukses'
        ];
    }
}