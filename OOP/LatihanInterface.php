<?php
/*
Interface merupakan kontrak class untuk kelas child nya
Interface ini mirip dnegan abstract class, yang beda adalah di interface semua functionnya abstrak dan tidak memiliki block
Untuk mewariskan turunan makenya implements
Beda dengan extends, child dari interface bisa punya banyak parent
Kalo interface mau inheritance interface lain pakenya extends dan bisa lebih dari 1
*/

interface Car extends HasBrand
{
    function drive(): void;
    function getTire(): int;
}

interface HasBrand
{

    function setBrand(string $brand): void;
    function getBrand(): string;
}

interface isMaintenance
{
    function isMaintenance(): bool;
}

class MiniBus implements Car, isMaintenance
{

    var string $name;
    var string $setir = "Kanan";
    var string $brand;

    function isMaintenance(): bool
    {
        return true;
    }

    function getBrand(): string
    {
        return $this->brand;
    }

    function setBrand(string $brand): void
    {
        $this->brand = $brand;
    }

    function __construct($name)
    {
        $this->name = $name;
    }
    function drive(): void
    {
        echo "Mini Bus $this->name dikemudikan di sebelah $this->setir, dan memiliki ", $this->getTire(), " buah ban\n";
    }
    function getTire(): int
    {
        return 4;
    }
}
