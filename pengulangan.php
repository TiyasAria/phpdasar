<?php
//for
/*
for didalamnya ada 3 
1. inisialisasi = var awal untuk pengulangan 
2. kondisi terminasi = memberhentikan pengulangan 
3. increment dan decrement = menentuksn pengulangan maju atau mundur 
*/
for ($i = 0; $i < 5 ; $i++){
    echo "Hello world! <br>";
}

//while
/*
kalau kondisi nya true lakukan yang berada di kurung kurawal , kalau false 
kalau false , dia tidk akan menampilkan samsek akan putih.
cek dulu baru jalanin 
*/

$f = 0;
while($f < 5){
    echo "hello tiyas <br>";
    $f++;
}

//do-while 
//lakukan hal ini selama kondisinya true , jalankan aja dulu , baru  cek kondisi
// klau false dia akan nampilin satu code doang 
$t = 0;
do{
 echo"Hello my world <br>";
 $t ++;
}while($t < 5 );

?>