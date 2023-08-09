<?php

namespace App\Controllers;

class PagesController extends BaseController
{

    public function index(): string
    {
        $data = [
            'title' => "Home"
        ];
        return view('page/home', $data);
    }

    public function about(): string
    {
        $data = [
            'title' => "About",
            'test' => [
                'gayuh' => 'manusia',
                'amanda' => 'beruang'
            ]
        ];
        return view('page/about', $data);
    }

    public function contact(): string
    {
        $data = [
            'title' => "Contact",
            'addresses' => [
                [
                    'type' => 'Home',
                    'street' => 'Jl. Jalanan',
                    'city' => 'Bekasi'
                ],
                [
                    'type' => 'Office',
                    'street' => 'Jl. Bukan Jalan',
                    'city' => 'Bekasi'
                ]
            ]
        ];
        return view('page/contact', $data);
    }

}