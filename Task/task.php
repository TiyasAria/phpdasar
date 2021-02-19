<?php
$db2 = mysqli_connect("localhost","root","","db_phpdasar");
$result2 = mysqli_query($db2,"SELECT * FROM tb_food");
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
<h1>Daftar Makanan</h1>
    <table border="1" cellpadding="10" cellspacing="0">
    <tr>
    <th>No</th>
    <th>Categori</th>
    <th>Menu</th>
    <th>Harga</th>
    <th>Foto</th>
    </tr>
    
    <?php $no =1 ;?>
    <?php while($row = mysqli_fetch_assoc($result2)): ?>
    <tr>
    <td><?= $no; ?></td>
    <td><?= $row["category"];?></td>
    <td><?= $row["menu"];?></td>
    <td><?= $row["harga"];?></td>
    <td><img src="assets/<?=$row["foto"]; ?>" width="50"></td>
    </tr>
    <?php $no++ ?>
    <?php endwhile;?>
    </table>
</body>
</html>