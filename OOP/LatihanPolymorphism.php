<?php

/*
polymorpihsm adalah banyak bentuk, kemampuan sebuah objek berubah bentuk ke bentuk lainnya

jadi gacuma memasukkan data programmer aja sebagai parentnya, bisa juga make object turunannya

*/

class Programmer
{
    var $name;

    function __construct(string $name)
    {
        $this->name = $name;
    }
}

class BackendProgrammer extends Programmer
{
    var $position = "Backend Programmer";
}

class FrontendProgrammer extends Programmer
{
    var $position = "Frontend Programmer";
}

class Company
{
    public Programmer $programmer;

    function sayHello()
    {
        echo "Hello, my name is Programmer {$this->programmer->name}\n";
    }
}

/*
Polymorphism ini juga bisa digunakan dalam function parameter
isi dari parameter ini tidak harus objek programmer, namun turunannya juga bisa
*/

function syaHelloPro(Programmer $programmer)
{
    if ((isset($programmer->position)) != true) {
        echo "Hello, my name is {$programmer->name}\n";
    } else {
        echo "Hello, my name is {$programmer->name} and my position is {$programmer->position}\n";
    }
}

/*
Ada yang namanya type check dan cast yang digunakan untuk mengecek tipe data objek
Menggunakan instanceof
*/

function sayHelloCheck(Programmer $programmer)
{
    if ($programmer instanceof BackendProgrammer) {
        echo "Hello BackendProgrammer $programmer->name\n";
    } elseif ($programmer instanceof FrontendProgrammer) {
        echo "Hello FrontendProgrammer $programmer->name\n";
    } else {
        echo "Hello Programmer\n";
    }
}
