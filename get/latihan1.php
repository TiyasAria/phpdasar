<?php
// ini merupakan global variael jadi gak bisa dipanggil didalam func
// kalau mau manggil di func orng harus pakai global
$x = 10;

function tampilX(){
    global $x;
    echo $x;
}

tampilX();

?>