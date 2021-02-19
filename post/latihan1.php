<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!-- kalo tombol submit udah kepencet maka akan muncul tulisan welcome ini  -->
<?php if(isset($_POST["submit"])):?>
<h1>Welcome In The Login, <?= $_POST["nama"]?></h1>
<?php endif; ?>
    <form action= "" method="post">
    Masukan Nama : 
    <p>
    <input type="text" name="nama">
    <p>
    <button type="submit" name="submit">kirim</button>
    </form>
</body>
</html>