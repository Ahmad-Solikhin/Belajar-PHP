<?php
/*
 * Session biasnaya digunakan untuk mengingat interaksi sebelum dari client
 * Session ini merupakan teknik untuk enyimpan informasi client di server, sehingga ketika ada request dari client yang sama, kita bisa tahu dari server
 * contohnya pada proses login, setelah login sukses maka akan dibuat session dengan membawa info dari sessionnya
 * Untuk menggunakan fitur session harus menggunakan plugin
 * $_SESSION merupakan variable array yang berisi data di session
 * Jika session belum di start maka perubahan di $_SESSION tidak akan berpengaruh apa-apa*/

session_start(); // untuk memulai session

if(isset($_SESSION['login'])){
    if($_SESSION['login'] == true) {
        header('Location: /session/member.php');
        exit();
    }
}
$error = "";
if ($_SERVER['REQUEST_METHOD'] == "POST"){
    if($_POST['username'] == "Gayuh" && $_POST['password'] == "Gayuh"){
        $_SESSION['login'] = true;
        $_SESSION['username'] = "Gayuh";
        header('Location: /session/member.php');
    }else{
        $error="Login Gagal";
    }
}
?>

<html>
    <body>
    <?php
    if (isset($_GET['kode'])){
        $kode = $_GET['kode'] == 1? "Belum Login":"";
        echo $kode;
    }
    if($error != ""){
        echo "<h2> $error </h2>";
    } ?>
    <h1>Login</h1>
    <form action="login.php" method="post">
        <label>Username :
            <input type="text" name="username">
        </label>
        <br>
        <labe>Password :
            <input type="password" name="password">
        </labe>
        <br>
        <input type="submit" value="Login">
    </form>
    </body>
</html>

<?php
/*
 * Ada masalah yang akan dihadapi jika menggunakan session karena session ini akan tersimpan di file
 * Biasanya alternatifnya adalah secure cookie atau JWT (json web token)
*/
