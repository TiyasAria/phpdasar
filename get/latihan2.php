<?php
//superglobal variabel 

// $_GET["nama"]= "Tiyas";
// var_dump($_GET)
$mahasiswi = [
    ["nama"=>"Tiyas",
    "nim"=>"0812345",
    "jurusan" =>"Teknik Informatika", 
    "email"=>"taria123@gmail.com"],
    ["nama"=>"Rifdah",
    "nim"=>"098765",
    "jurusan"=>"Teknik Informatika", 
    "email"=>"rifdahal123@gmail.com"],
    ["nama"=>"bigbos",
    "nim"=>"234567",
    "jurusan"=>"Teknik Informatika",
    "email"=>"bigbos456@gmail.com"]
]

 // menggunakan tipe data array asosiatif 
 // menggunakn tanda tanya (?) di url itu berfungsi 
 // untuk memasukan data kedalam web nya 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <ul>
     <?php foreach($mahasiswi as $m):?>
        <li>
        <!-- ngirimi data -->
            <a href="latihan3.php?nama=<?= $m["nama"]?>
            &nim=<?= $m["nim"]?>
            &jurusan=<?= $m["jurusan"]?>
            &email=<?= $m["email"] ?>">
            <?= $m["nama"];?>
        </li>
     <?php endforeach;?>
    </ul>
</body>
</html>