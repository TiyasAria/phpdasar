<?php
//untuk menampilkan tanggal dg format tertentu 
date_default_timezone_set("Asia/jakarta");

echo date("D,d m y");
echo "<br>";
echo date("H:i:s");
echo"<br>";

//detik 
//detik yang ditetapkan sudah berlalu  sejak 1 januari 1997
echo time();
echo "<p>";

echo date("l,d M Y", time()-60*60*24*1000);
echo "<br>";

//strtotime
//string to time 
echo date("l", strtotime("24 august 2002"));

?>