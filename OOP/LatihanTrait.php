<?php

/*
Trait mirip dengan abstrak class. bisa dibuat abstrak function sama function biasa
Di trait bisa mewariskan lebih dari 1 pada class
Trait lebih mirip kayak extension
Trait bisa digunakan untuk menyimpan function2x yang bisa digunakan ulang di banyak class
Menggunakan kata kunci use
*/

trait SayGoodBye
{

    var string $name;

    function goodBye(?string $name)
    {
        if ($name == null) {
            echo "Good Bye\n";
        } else {
            echo "Good Bye $name\n";
        }
    }
}

/*
Untuk menggunakannya seperti dibawah ini
*/

class person
{
    use SayGoodBye, CanRun;

    function run(): void
    {
        echo "$this->name is running\n";
    }

    function goodBye(?string $name) //Ini menjadi lebih di prioritasin daripada parent dan traitnya jika punya function yang sama
    {
        echo "Good bye in person\n";
    }
}

/*
Di trait bisa ditambahkan properties
*/

trait HasName
{
    var string $name;
}

class People
{
    use HasName;
}

/*
Trait abstrak function. di trait bisa membuat abstrak function, jadi class yang use trait tersebut harus override trait nya
 */

trait CanRun
{
    abstract function run(): void;
}

/*
Trait overriding. Kalo class punya parent yang class nya sama kayak trait yang dipake, maka function itu akan otomatis ter override sama trait nya
Alurnya adalah ParentClass->Trait->ChildClass
*/

/*
Trait visibility Override. Bisa dilakukan visibility function yang ada di trait
Misal di trait ada function public, nanti di class u=yg use trait bisa diubah jadi private maupun protected
*/

class Human
{
    use SayGoodBye {
        goodBye as public; //Bisa di override untuk mengubah visibility function
    }
}

/*
Trait conflict, jika ada function yang sama di trait yang sama2x di use di class
Bisa diatasi dengan instead of
*/

trait A
{
    function doA()
    {
        echo "A\n";
    }

    function doB()
    {
        echo "B\n";
    }
}

trait B
{
    function doA()
    {
        echo "a\n";
    }

    function doB()
    {
        echo "b\n";
    }
}

class Doing
{
    use A, B {
        A::doA insteadof B;
        B::doB insteadof A;
    } //Pake insteadof untuk milih mau pake function yang mana jika nama functionnya sama
}

$doing = new Doing();
$doing->doA();
$doing->doB();

/*
Trait inheritance. Trait hanya bisa inheritance dari trait lain
Menggunakan kata kunci use
*/

trait All
{
    use SayGoodBye, A;
}

class useAll
{
    use All;
}
