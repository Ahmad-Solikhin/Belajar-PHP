<?php

/*
Untuk copas object bisa dipake object cloning untuk duplikasi data
*/

class Student
{
    var string $name;
    var int $id;
    var int $age;
    private string $country;

    function setCountry(string $country)
    {
        $this->country = $country;
    }

    function getCountry()
    {
        return $this->country;
    }

    //function __clone bisa digunakan untuk menghapus beberapa properties ketika telah dilakukan cloning
    function __clone()
    {
        //bisa dikasih opsi hapus properties pake unset, setelah di clone akan dihapus
        unset($this->country);
    }
}

$student1 = new Student();
$student1->age = 20;
$student1->id = 1;
$student1->name = "Gayuh";
$student1->setCountry("Indonesia");


$student2 = clone $student1; //Ini yang dipake buat cloning

var_dump($student1);
var_dump($student2);

//__clone merupakan function untuk memodifikasi cara PHP melakukan clone
//Ini digunakan jika tidak semua properties dilakukan clone
