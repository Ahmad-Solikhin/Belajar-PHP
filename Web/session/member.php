<?php
session_start();
if ($_SESSION['login'] != true){
    header('Location: /session/login.php?kode=1');
    exit();
}

echo "Selamat Datang {$_SESSION['username']}";

?>

<html>
<body>
<br>
<a href="/session/logout.php">Logout</a>
</body>
</html>

