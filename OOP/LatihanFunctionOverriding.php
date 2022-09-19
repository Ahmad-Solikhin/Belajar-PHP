<?php
/*
Ini adalah kemampuan mendeklarasikan ulang function di child class nya yang ada di parent class
Kalo udah overriding function yag digunakan adalah function yang baru
Tidak disarankan override function dengan mengubah jumlah parameternya, tapi ga disarankan karena dapat merusak struktur fungsi tersebut

Cunstrocture juga bisa di override kayak function, tapi boleh diubah jumlah argumennya tapi disarankan memanggil paren contructornya
*/


class Manager
{
    var string $name;

    function __construct(string $name = "")
    {
        $this->name = $name;
    }

    function sayHello(string $name): void
    {
        echo "Hello $name, my name is Manager $this->name\n";
    }
}

class VicePresident extends Manager
{
    var ?int $age;
    var ?string $gender;

    function __construct(string $name = "", ?int $age = null, ?string $gender = null)
    {
        parent::__construct($name);
        $this->age = $age;
        $this->gender = $gender;

        //disarankan untuk memanggil constructor di parent nya
    }

    function sayHello(string $name): void //error kalo diubah jumlah parameternya karena harus sama jummlah parameter nya
    {
        echo "Hello $name, my name is VP $this->name, my age is $this->age and my gender is $this->gender\n";
    }

    /*
    Parent keryword untuk mengakses hal dari parent yang sudah terlanjur di override menggunakan parent

    */

    function sayHelloParent($name)
    {
        echo parent::sayHello($name); //Make parent disini buat ngakses fungsi parent nya
    }
}
