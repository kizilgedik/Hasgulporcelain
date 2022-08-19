<?php

$vt_sunucu="localhost";
$vt_kullanici="root";
$vt_sifre="";
$vt_adi="me";


$baglan=mysqli_connect($vt_sunucu,$vt_kullanici,$vt_sifre,$vt_adi);


if(!$baglan)
{
    die("Database connection failed.<br>".mysqli_connect_error()); 
}

else{
    echo"***Connection is successful.<br>";
}


?>