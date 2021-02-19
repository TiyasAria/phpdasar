<?php
$mahasiswi = [
    ["Tiyas","0812345","Teknik Informatika", "taria123@gmail.com"],
    ["Rifdah","098765","Teknik Informatika", "rifdahal123@gmail.com"],
    ["bigbos", "234567","Teknik Informatika","bigbos456@gmail.com"]
];
//cara manggil rifdah , pertama dr index si kumpulAN 3 ARRAY , baru index rifdah
echo $mahasiswi[1][0];
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
    <li>Nama : <?= $m[0]?></li>
    <li>NIM : <?= $m[1]?></li>
    <li>Jurusan :<?= $m[2]?></li>
    <li>Email :<?= $m[3]?></li>
    </ul>
    <?php endforeach;?>
</body>
</html>