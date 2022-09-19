<?php
require_once "LatihanPolymorphism.php";

$company = new Company();

//Karena kemampuan polymorphism properties programmer tidak hanya bisa diisi dengan objek programmer saja,
//Namun kita dapat mengisinya dengan objek turunannya
$company->programmer = new Programmer("Gayuh");
var_dump($company);
$company->programmer = new BackendProgrammer("Ahmad");
var_dump($company);
$company->programmer = new FrontendProgrammer("Amanda");
var_dump($company);

$company->programmer->name = "Raharjo";

$company->sayHello();

syaHelloPro($company->programmer);

$company1 = new Company();
$company1->programmer = new BackendProgrammer("Gayuh");
var_dump($company1->programmer);

syaHelloPro($company1->programmer);

$company->programmer = new FrontendProgrammer("Amanda");
syaHelloPro($company->programmer);

$company->programmer = new Programmer("Gayuh");
syaHelloPro($company->programmer);
