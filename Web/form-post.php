<?php
/*
 * digunakan untuk mengirimkan data dari client ke server, biasanya digunakan $_POST
 * Cara penggunaannya mirip kayak $_GET*/
?>


<html>
<body>
<h1>Register</h1>
<form action="form-post.php" method="post">
    <label>Nama     :
    <input type="text" name="nama">
    </label>
    <br>
    <label>Gender   :
        <input type="text" name="gender">
    </label>
    <br>
    <input type="submit" value="Register">
    <br>
    <br>

    <table>
        <tr>
            <td>Nama</td>
            <td><?= $_POST["nama"] // Kalo gada key nya nanti bakal kosong, bisa dicek dulu datanya kosong apa engga?></td>
        </tr>
        <tr>
            <td>Gender</td>
            <td><?= $_POST["gender"]?></td>
        </tr>
    </table>
</form>
</body>
</html>