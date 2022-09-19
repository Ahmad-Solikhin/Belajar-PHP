<?php
/*
Class yang gabisa dibuat objek secara langsung, hanya turunannya yang bisa dibuat objek
Biasanya abstrak class ini dibuat sebagai kontrak
*/

abstract class Location
{
    var string $name;

    //Dapat dibuat abstrak function yang digunakan agar turunannya harus menoverride
    //Gaboleh dibuat block functionnya di abstrak function, gaboleh dibuat private juga

    abstract function introduce($name): void;
}

class Country extends Location //Class ini bisa dibuat objeknya karena dia turunan dari abstrak class
{
    function introduce($name): void
    {
        echo "Hello $name, I'am $this->name\n";
    }
}

require_once "Food.php";

abstract class Animal
{

    var string $name;
    abstract function run();
    abstract function eat(AnimalFood $food);
}

class Cat extends Animal
{
    function run(): void
    {
        echo "Cat $this->name is running\n";
    }

    function eat(AnimalFood $food)
    {
        echo "Cat is eating\n";
    }
}

class Dog extends Animal
{
    function run(): void
    {
        echo "Dog $this->name is running\n";
    }

    function eat(Food $food) //Ini contravariance karena malah naik ke parent
    {
        echo "Dog is eating\n";
    }
}
