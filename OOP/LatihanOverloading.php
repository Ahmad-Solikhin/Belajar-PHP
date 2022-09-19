<?php

/*
Overloading adalah kemampuan secara dinamis dalam membuat properties atau function

Overloading erat kaitannya dengan magic function
Jika propertiesnya tidak ada maka PHP akan error, tetapi akan dilakukan fallback magic function
Dengan begitu bisa digunakan magic function untuk membuat properties secara otomatis

__set untuk mengakses value yang tidak ada
__get untuk mengakses properties yang tidak ada
__isset untuk mengecek isset atau empty properties yg gada
__unset untuk melakukan unset properties yang gada
*/

class Zero
{
    private array $properties = [];

    function __get($name)
    {
        return $this->properties[$name];
    }

    function __set($name, $value)
    {
        return $this->properties[$name] = $value;
    }

    function __isset($name): bool
    {
        return isset($this->properties[$name]);
    }

    function __unset($name)
    {
        unset($this->properties[$name]);
    }

    function __call($name, $arguments)
    {
        $join = join(",", $arguments);
        echo "No function with name $name and arguments $join\n";
    }

    static function __callStatic($name, $arguments)
    {
        $join = join(",", $arguments);
        echo "No srtatic function with name $name and arguments $join\n";
    }
}

$zero = new Zero();

$zero->lastName = "Gayuh";
echo $zero->lastName . PHP_EOL;
echo isset($zero->lastName) . PHP_EOL;
echo isset($zero->firstName) . PHP_EOL;
unset($zero->lastName);
var_dump($zero);

/*
Function overloading, jika function tidak tersedia PHP tidak akan lgsg error, tai callback magic function
Kalo gada bisa dibuat secara dinamis
pake __call($name, $arguments): mixed digunkan jika ada memanggil function yang tidak tersedia

static__CallStatic($name, $arguments): mixed digunakan jika memanggil function static
 */

$zero->sayHello("Gayuh", 1);
zero::sayHello("Ahmad", 2);
