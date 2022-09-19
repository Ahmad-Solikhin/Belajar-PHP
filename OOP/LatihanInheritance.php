<?php
/*Child hanya boleh punya 1 parent, tapi parent boleh punya banyak child
Ini adalah fungsi pewarisan, semua properties dan function yang dimiliki akan diwariskan ke childnya
Pewarisannya menggunakan extends dan diikuti dengan nama class nya
*/
class Person
{
    var string $alamat;
}

class Manager extends Person
{
    var string $name;

    function sayHello(string $name): void //Memberitahu kalau fungsinya ga mengembalikan value
    {
        echo "Hello $name, my name is $this->name\n";
    }

    function sayHelloAdd(string $name): void
    {
        echo "Hello $name, my name is $this->name dan i live in $this->alamat\n";
    }
}

class VicePresident extends Manager
{
}
