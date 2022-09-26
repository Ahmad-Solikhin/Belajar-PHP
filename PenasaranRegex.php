<?php


$path = "/products/12345/categories/abcd";

//Membuat pola regex
$pattern = "#^/products/([0-9a-zA-Z]*)/categories/([0-9a-zA-Z]*)$#";

if(preg_match($pattern, $path, $variables)){
    var_dump($variables);
}