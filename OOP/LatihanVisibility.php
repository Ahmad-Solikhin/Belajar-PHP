<?php
/*
visibility atau akses modifier untuk mengetahui suatu hal dapat diakses dimana aja
secara default itu public yang bisa diakses dimana aja, var itu public dalam class

ada public = dimana aja bisa
ada protected = tidak global, di class dan subclass(turunan) bisa
ada private = hanya bisa di class itu sendiri

*/

class visibility
{
    private string $name;
    protected int $age;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function setAge($age)
    {
        $this->age = $age;
    }
}

class Protect extends visibility
{
    function info()
    {
        echo "Age $this->age\n";
    }
}

$person1 = new visibility("Gayuh");
echo $person1->getName() . PHP_EOL;
$person1->setName("Ahmad");
echo $person1->getName() . PHP_EOL;

$person2 = new Protect("Amanda");
$person2->setAge(20);
$person2->info();
