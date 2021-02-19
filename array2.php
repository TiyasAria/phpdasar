<?php
//pengulangan pada array menggunakan foreach

$angka = [2,3,4,5,6,5,8,5,4,3];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    .kotak{
        width : 50px;
        height : 50px;
        background-color : salmon;
        text-align : center;
        line-height : 50px;
        margin : 3px;
        float : left;
    }
    /* untuk ngebawahin  */
    .clear{ clear:both;}
    </style>
</head>
<body>
<!-- kalau ini di deklaraasikan kalau angkanya itu 7  -->
<?php for($x =0; $x <7; $x++):?>
<div class="kotak"><?= $angka[$x]; ?></div>  
<?php endfor;?> 

<div class="clear"></div> 

<!-- ini untuk hitung kalau angka nya itu gak di definisikan  -->
<?php for($x =0; $x <count($angka); $x++):?>
<div class="kotak"><?= $angka[$x]; ?></div>  
<?php endfor;?> 

<div class="clear"></div> 

<!-- menggunakan perulangan foreach -->
<?php foreach($angka as $a):?>
<div class="kotak"><?= $a;?> </div>
<?php endforeach;?>
</body>
</html>
