<?php

require_once __DIR__."/GetConnection.php";

$connection = getConnection();

$sql = "INSERT INTO customer(id, name, email) VALUES ('gayuh', 'Gayuh', 'ahmadsgr39@gmail.com')";

$connection->exec($sql);

$connection = null;
