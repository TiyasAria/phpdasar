<?php
// koneksi ke database
// yng didalam kurung merupakan parameter(host,user,pwd,name db)
$db = mysqli_connect("localhost","root","","db_phpdasar");

//ambil dta dari table
$result = mysqli_query($db,"SELECT * FROM tb_mahasiswa");

/* 
cara merubah data mysql menjadi array
- mysqli_fetch_row() -> mengembalikan data array numerik
- mysqli_fetch_assoc() -> mengembalikan data array assosiatif
- mysqli_fetch_array() -> mengembalikan data array numerik dan asosiatif
- mysqli_fetch_object() -> mengembalikan object yang array assosiative
*/


// this fetch/ambil data dan menjadikannya menjadi array , yg dibawah ini cuman contoh doang 
// while ($result_mhs = mysqli_fetch_assoc($result)){
//     var_dump($result_mhs);
// }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Daftar Sholihah</h1>
    <table border="1" cellpadding="10" cellspacing="0">
    <tr>
    <th>No</th>
    <th>Name</th>
    <th>Gambar</th>
    <th>NIM</th>
    <th>Jurusan</th>
    <th>Email</th>
    </tr>
    
    <?php $no =1 ;?>
    <?php while($row = mysqli_fetch_assoc($result)): ?>
    <tr>
    <td><?= $no; ?></td>
    <td><?= $row["nama_mahasiswa"];?></td>
    <td><img src="img/<?=$row["gambar_mahasiswa"]; ?>" width="50"></td>
    <td><?= $row["nim_mahasiswa"];?></td>
    <td><?= $row["jurusan_mahasiswa"];?></td>
    <td><?= $row["email_mahasiswa"];?></td>
    </tr>
    <?php $no++ ?>
    <?php endwhile;?>
    </table>
</body>
</html>
