<?php
/*
Bikin class langsung sekaligus menginisiasi objectnya
Cocok jika ada kasusu membuat implementasi interface atau abstrak class sederhana
Kalo kasusnya kompleks mending gausah dipake
*/

interface HelloWorld
{
    function sayHello(): void;
}

$hei = new class("Gayuh")/*Parameter langsung taro sini */ implements HelloWorld //Disini gada nama class nya
{

    var string $name;

    function __construct(string $name) //Constructor di anonymous class
    {
        $this->name = $name;
    }

    function sayHello(): void
    {
        echo "Hello Gayn $this->name\n";
    }
};

$hei->sayHello();
