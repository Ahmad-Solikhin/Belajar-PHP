<?php

/*
 * Untuk data nantinya tidak akan dilakukan hardcode melainkan menerima input user yang dikirimkan ke database
 * Namun ada thread sql injection untuk mengirim input dengan query bukan username
 * Hal ini bisa membuat orang bisa kebobolan
 * Cara mengatasi ini adalah dnegan cara jangan membuat query secara manual secara langsung
 * Untuk penggunaan query() dan exec() tidak direkomendasikan jika harus menggunakan input dari user
 * Jika membutuhkan query bisa menggunakan prepare() dan quote() untuk memastikan input user itu aman
 * prepare() akan mengembalikan object PDOStatement
 * Kalo pake prepare() ada sedikit perbedaan dari string sql nya, menggunakan :namaParameter*/

require_once __DIR__."/GetConnection.php";

$username = "amanda"; //Ini bisa menyebabkan sql injection
$password = "bear";

$connection = getConnection();

//Ini string query kalo pake prepare()
$sql = "SELECT * FROM admin WHERE username = :username AND password = :password";
$prepareStatement = $connection->prepare($sql);
//Setelah itu wajib dilakukan binding mana input dari user agar parameter dilakukan quote
$prepareStatement->bindParam("username", $username);
$prepareStatement->bindParam("password", $password);
$prepareStatement->execute();
echo $sql.PHP_EOL;

//Binding parameter bisa juga pake index untuk mempermudah jika parameternya panjang
//Nama parameter diganti dengan ?

$sql = "SELECT * FROM admin WHERE username = ? AND password = ?";
$prepareStatement = $connection->prepare($sql);
//Setelah itu wajib dilakukan binding mana input dari user agar parameter dilakukan quote
$prepareStatement->bindParam(1, $username);
$prepareStatement->bindParam(2, $password);
$prepareStatement->execute();
echo $sql.PHP_EOL;

//Berikut adalah cara lebih mudah tanpa harus hardcode bindParam satu per satu
$sql = "SELECT * FROM admin WHERE username = ? AND password = ?";
$prepareStatement = $connection->prepare($sql);
//Setelah itu wajib dilakukan binding mana input dari user agar parameter dilakukan quote
$prepareStatement->execute([$username, $password]); //Ini dapat menggantikan bindParam()
echo $sql.PHP_EOL;

foreach ($prepareStatement as $row){
    var_dump($row);
}

//Ini adalah cara yang aman
//Tapi quote ini juga ga direkomendasiin, lebih baik kalo ada input dari admin itu pake function prepare()
$username = $connection->quote($username);
$password = $connection->quote($password);

//Kalo pake function quote gaperlu lagi username = '$username', lgsg aja username = $username
$sql = "SELECT * FROM admin WHERE username = $username AND password = $password";
echo $sql.PHP_EOL;

$statement = $connection->query($sql);

$sukses = false;
$user = null;
foreach ($statement as $row){
    $sukses = true;
    $user = $row['username'];
}

if ($sukses){
    echo "Sukses login dengan username : $user\n";
}else{
    echo "Gagal login, tidak dapat menenmukan username : $username\n";
}

//exit();
//Berikut adalah contoh ketika melakukan insert
$username = "amanda";
$password = "bear";

$sql = "INSERT INTO admin(username, password) VALUES (?, ?)";
$prepareStatement = $connection->prepare($sql);
$prepareStatement->execute([$username, $password]);

echo $sql.PHP_EOL;


$connection = null;
