<?php
// tidak boleh ada spasi di function atau method

use function PHPSTORM_META\type;

function sayHello(string $nama = null)
{
    if (is_null($nama)) {
        echo "Hello Function\n";
    } else {
        echo "Hello $nama\n";
    }
}

sayHello("Gayuh");
sayHello();

//Kalau dua parameter dan ingin memberikan default value, akan susah jika default ada di awal parameter

function tambah(int $first, int $second)
{
    echo $first + $second, PHP_EOL;
}

tambah(1, 2);
tambah("1", 5);

//Variable length argumen list membuat parameter dengan banyak value dan hanya bisa ditempatkan pada parameter terakhir dengan ... sebelum nama parameter
function sumAll(...$values)
{
    $total = 0;
    foreach ($values as $value) {
        $total += $value;
    }
    echo "Total ", implode("+", $values), " = $total\n";
}

sumAll(10, 10, 10, 10);
//Kalau mau pake array harus pake ... diawal
sumAll(...[1, 2, 3]);

//Function yang mengembalikan nilai dengan return
function returnSum(int $first, int $second): int // buat mendeklarasikan tipe data return value
{
    return $first + $second;
}

$total = returnSum(10, 20);
var_dump($total);

//Method overloading di php
function sayHallo($name, ...$arg)
{
    if ($name == "panggil") {
        if (count($arg) != 0) {
            echo "Hallo ", implode(", ", $arg), PHP_EOL;
        } else {
            echo "Hello World";
        }
    }
}

sayHallo("panggil", "Gayuh", "Amanda");

//Variable function, gunanya untuk membuat argumen sebuah fungsi untuk memanggil fungsi lain
function foo()
{
    echo "FOO\n";
}

function bar()
{
    echo "BAR\n";
}

$functionName = "foo";
$functionName();

//Biasa juga disebut sebagai callback
function sayHi(string $name, $filter)
{
    $finalName = $filter($name);
    echo "Hello $finalName\n";
}

function sampleName(string $name): string
{
    return "Sample $name";
}

sayHi("Gayuh", "SampleName"); //Memanggil function sampleName pada argumen ke2


//Anonymous Function atau function tanpa nama atau di PHP adalah Closure
$tambah = function (int $satu, int $dua): int {
    return $satu + $dua;
};

$hasil = $tambah(1, 3);
echo $hasil . PHP_EOL;

//Function lgsg di parameter

function sayGoodBye($nama, $filter)
{
    $finalName = $filter($nama);
    echo "Good Bye $finalName\n";
}

sayGoodBye("Gayuh", function (string $name): string {
    return strtoupper($name);
});

//Mengakses variable diluar closure menggunakan "use"
$first = "Ahmad";
$last = "Raharjo";

$say = function ($name) use ($first, $last) {
    echo "Hi $first $name $last\n";
};

$say("Gayuh");


//Arrow function, adalah anonymous function yang lebih sederhana. bedanya bisa menggunakan variable luar closure tanpa menggunakan use

$sayHi = fn ($name) => "Hello $first $name $last\n";

echo $sayHi("Annas");

//Callback function memanggil function menggunakan parameter menggunakan tipe data callable
function sayHei(string $name, callable $filter) //callable tipe data untuk function
{
    $finalName = call_user_func($filter, $name); //$filter($name);
    echo "Hello $finalName\n";
}



sayHei("Amanda", fn ($name) => "$name Rizkyta Hamidah");

//Recursive function, function yang memanggil functionnya sendiri
function faktorial(int $angka)
{
    if ($angka != 1) {
        return $angka * faktorial($angka - 1);
    } else {
        return 1;
    }
}

echo faktorial(10) . PHP_EOL;

/*
Komentar yang panjang
*/
