<?php
/*
 * response dari server biasanya memiliki response yang disebut response code
 * Cara mengubah response code */

if (!isset($_GET["name"]) || $_GET["name"] == ""){
    http_response_code(400); //Function yang digunakan
    echo "Name is Required";
    exit();
}

?>
<h1><?= $_GET["name"]?></h1>
