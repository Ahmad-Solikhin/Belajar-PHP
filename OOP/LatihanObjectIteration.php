<?php
/*
Kta bisa melakukan iterasi properties pada object tersebut menggunakan foreach
Kalo manual bisa pake iterator. kalo bikin manual ribet, tapi bisa pake ArrayIterator yang mudah
Dan biar class nya di iterasi secara manual bisa dipaje IteratorAggregate dimana hanya perlu override getIterator()
 */


class Data implements IteratorAggregate
{
    var string $name = "Gayuh";
    var int $age = 20;
    var string $gender = "Laki-laki";
    protected string $country = "Indonesia";


    //Dengan cara ini kita bisa menentukan secara manual data apa saja yang dapat di iterasi
    // function getIterator(): Traversable
    // {
    //     $array = [
    //         "name" => $this->name,
    //         "age" => $this->age,
    //         "gender" => $this->gender,
    //         "country" => $this->country
    //     ];

    //     $iterator = new ArrayIterator($array);

    //     return $iterator;
    // }

    //Opsi 2 pake yiled
    function getIterator(): Traversable
    {
        yield "name" => $this->name;
        yield "age" => $this->age;
        yield "gender" => $this->gender;
        yield "country" => $this->country;
    }
}

$data = new Data();

foreach ($data as $property => $value) {
    echo "$property => $value\n";
}

/*
Fitur generator bisa digunakan untuk membuat iterator secara otomatis menggunakan yield
*/

//Contoh yang pake array
function getGenap(int $max): Iterator
{
    $array = [];
    for (
        $i = 0;
        $i <= $max;
        $i++
    ) {
        if ($i % 2 == 0) {
            $array[] = $i;
        }
    }

    return new ArrayIterator($array);
}

foreach (getGenap(100) as $property => $value) {
    echo "$property => $value\n";
}

//Contoh yang pake yiled
function getGanjil(int $max): Iterator
{
    for ($i = 0; $i <= $max; $i++) {
        if ($i % 2 == 1) {
            yield $i;
        }
    }
}

$a = getGanjil(50);

var_dump($a);

foreach (getGanjil(100) as $property => $value) {
    echo "$property => $value\n";
}
