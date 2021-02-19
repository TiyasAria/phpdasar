<?php
date_default_timezone_set("Asia/jakarta");
$jam = date("H:i");

if ($jam > "03.00" && $jam < "10.00"){
    $waktu = "Good Morning";
}elseif($jam >= "10.00" && $jam < "15.00"){
    $waktu = "Good Afternoon";
}elseif($jam >= "15.00" && $jam < "18.00"){
    $waktu = "Good Evening";
}else{
    $waktu = " Good Night met bobok";
}

echo $waktu;

?>