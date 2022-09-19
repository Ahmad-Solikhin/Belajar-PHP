<?php

#[Attribute]
class Length{
    var int $max;
    var int $min;

    function __construct(int $max, int $min){
        $this->min=$min;
        $this->max=$max;
    }
}

class Person{

    #[Length(min:6,max:10)]
    var ?string $name;

    #[Length(min:8,max: 10)]
    var ?string $gender;

    function __construct(string $name, string $gender){
        $this->gender=$gender;
        $this->name=$name;
    }
}

$person1=new Person(name: "Ahmadsgr",gender: "Laki");
$class = new ReflectionClass("Person");
$properties = $class->getProperties();
var_dump($properties);
echo PHP_EOL;

echo "Ngecek Panjang\n";
foreach ($properties as $property){
//    echo $property->getName().PHP_EOL; buat cek nama propertiesnya atau variable nya
    if (!$property->isInitialized($person1)){
        throw new Exception("Nilainya null\n");
    }
//    echo $property->getValue($person1).PHP_EOL; Buat cek valuenya
//    echo "Cek Panjang\n";

    cekLength($property, $person1);
}

function cekLength(ReflectionProperty $property, Object $object){
    $attributes = $property->getAttributes(Length::class);
    $value = $property->getValue($object);

    foreach ($attributes as $attribute){
        $panjang = strlen($value);
        $length = $attribute->newInstance();

        try{
            cekException(panjang: $panjang,length: $length,property: $property);
        } catch (Exception $exception){
            echo $exception;
        }
    }
}

function cekException(int $panjang, object $length, ReflectionProperty $property){
    if ($panjang<$length->min){
        throw new Exception("{$property->getName()} Kependekan");
    } elseif ($panjang>$length->max){
        throw new Exception("{$property->getName()} Kepanjangan");
    }
}