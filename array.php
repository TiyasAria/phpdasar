<?php
//array = variable yang dpt memiliki banyak nilai 
//element pada array boleh memiliki tipe data yang bercampur 
// array itu pasangan antara key(index) dan value
// dan index selalu dimulai dari angka 0 ya guys 

$hari = "senin";
$hari2 = "selasa";

//membuat array versi lama 
$hari = array("senin", "selasa", "rabu");
//new step 
$bulan = ["januari", "february", "marc", "april"];
$myself = ["Tiyas", 24 , true ];

var_dump ($bulan);
echo"<br>";
print_r($bulan);
echo"<br>";

echo $bulan[1];
echo "<p>";

//menamahkan element baru pada array
$bulan[] = "April";
var_dump($bulan);
?>