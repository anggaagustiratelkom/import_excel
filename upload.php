<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Import Excel Ke MySQL dengan PHP</title>
</head>
<body>
    <a href="index.php">Kembali</a>
    <br/><br/>
    <?php 
    include 'koneksi.php';
    ?>
    
    <form method="post" enctype="multipart/form-data" action="execute_upload.php">
        Pilih File: 
        <input name="filepegawai" type="file" required="required"> 
        <input name="upload" type="submit" value="Import">
    </form>
</body>
</html>