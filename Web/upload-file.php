<?php

/*
 * Untuk file yang di upload ke server bisa pake global variable $_FILES
 * Ini berisi seputar file yang diupload
 * Upload file akan disimpan secara otomatis ke temporary folder, sebelum dihapus dapat dipindahkan ke
 * Dalam global variable files terdapat properties name, type, size, dsb dengan cara $_FILES['userfiles']['name']
 * untuk ukuran file bisa diubah di php.ini*/
if($_SERVER['REQUEST_METHOD'] == "POST"){
    $file_name = $_FILES['upload_file']['name'];
    $file_type = $_FILES['upload_file']['type'];
    $file_size = $_FILES['upload_file']['size'];
    $file_temp_name = $_FILES['upload_file']['tmp_name'];
    $file_error = $_FILES['upload_file']['error'];
    //Memindahkan file ke dari temp folder dengan cara move_uploaded_file($asal, __DIR__.'/file/'.$file_name
    move_uploaded_file($file_temp_name, __DIR__.'/file/'.$file_name);
}
?>

<html>
<body>

<?php if($_SERVER['REQUEST_METHOD'] == 'POST'){ ?>
<table>
    <tr>
        <td>File Name</td>
        <td><?= $file_name ?></td>
    </tr>
    <tr>
        <td>File Type</td>
        <td><?= $file_type ?></td>
    </tr>
    <tr>
        <td>File Size</td>
        <td><?= $file_size ?></td>
    </tr>
    <tr>
        <td>File Tmp Name</td>
        <td><?= $file_temp_name ?></td>
    </tr>
    <tr>
        <td>File Error</td>
        <td><?= $file_error ?></td>
    </tr>
</table>
<?php } ?>
<h1>Upload FIle</h1>
<form action="upload-file.php" method="post" enctype="multipart/form-data"> <?php //harus pake multipart/form-data ?>
    <label>File :
        <input type="file" name="upload_file">
    </label>
    <input type="submit" value="upload">
</form>
</body>
</html>
