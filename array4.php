<?php
//array asosiatif
$mahasiswi = [
    ["Nama" =>"Tiyas",
    "NIM"=>"0812345",
    "Jurusan" =>"Teknik Informatika", 
    "Email"=>"taria123@gmail.com"],
    ["Nama" =>"Rifdah",
    "NIM"=>"098765",
    "Jurusan"=>"Teknik Informatika", 
    "Email"=>"rifdahal123@gmail.com"],
    ["Nama" =>"bigbos",
    "NIM"=>"234567",
    "Jurusan"=>"Teknik Informatika",
    "Email"=>"bigbos456@gmail.com"]
];
//cara manggil rifdah , pertama dr index si kumpulAN 3 ARRAY , baru index rifdah
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Daftar Mahasiswi</h1>
    <?php foreach($mahasiswi as $m):?>
    <ul>
    <li>Nama : <?= $m["Nama"]?></li>
    <li>NIM : <?= $m["NIM"]?></li>
    <li>Jurusan :<?= $m["Jurusan"]?></li>
    <li>Email :<?= $m["Email"]?></li>
    </ul>
    <?php endforeach;?>
</body>
</html>