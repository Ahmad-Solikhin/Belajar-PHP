<?php

/*
Saat override function di child class dengan function yang sama
Dengan covariance kita dapat mengoverride return function dengan return value yang lebih spesifik
*/

require_once "LatihanAbstrakClass.php";

interface AnimalShelter
{
    function adopt(string $name): Animal;
}

class CatShelter implements AnimalShelter
{
    function adopt(string $name): Cat //ini Covariance karena turun ke child
    {
        $cat = new Cat();
        $cat->name = $name;
        return $cat;
    }
}

class DogShelter implements AnimalShelter
{
    function adopt(string $name): Dog
    {
        $dog = new Dog();
        $dog->name = $name;
        return $dog;
    }
}

$cat = new CatShelter();
$catAdopted = $cat->adopt("Oyen");
var_dump($catAdopted);
$catAdopted->eat(new AnimalFood());

$dogShleter = new DogShelter();
$dog = $dogShleter->adopt("Heli");
$dog->eat(new Food());

/*
Contravariance memperbolehkan childclass untuk membuat argumen yang tidak spesifik daripada parent classnya

*/
