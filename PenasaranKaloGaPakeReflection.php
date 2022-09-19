<?php

class Length{
    var int $max;
    var int $min;

    function __construct(int $max, int $min){
        $this->max=$max;
        $this->min=$min;
    }
}

$panjangUsername = new Length(max:10,min: 8);
$panjangPassword = new Length(max:8,min: 6);

class Account{
    var ?string $username;
    var ?string $password;

    function __construct(?string $password = null, ?string $username = null)
    {
        $this->password=$password;
        $this->username=$username;
    }
}

$person = new Account(username:"gayuh",password: "huwalahumba");

$class = new ReflectionClass($person);
$properties = $class->getProperties();
foreach ($properties as $property) {
    $value = $property->getValue($person);
    $panjang = strlen($value);
    if ($property->getName()=="username"){
        try {
            cekPanjang(maxMin:$panjangUsername,property: $property,value: $panjang);
        } catch (Exception $exception){
            echo $exception.PHP_EOL;
        }
    } elseif ($property->getName()=="password"){
        try {
            cekPanjang(maxMin:$panjangPassword,property: $property,value: $panjang);
        } catch (Exception $exception){
            echo $exception.PHP_EOL;
        }
    }
}

function cekPanjang(object $maxMin, int $value, ReflectionProperty $property){
    if ($value < $maxMin->min){
        throw new Exception("{$property->getName()} Kependekan");
    } elseif ($value>$maxMin->max){
        throw new Exception("{$property->getName()} Kepanjangan");
    }
}