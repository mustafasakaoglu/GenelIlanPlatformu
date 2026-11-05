<?php

$host = "localhost";
$kullanici = "root";
$sifre = "";
$veritabani = "genel_ilan_sitesi";

$baglanti = mysqli_connect($host, $kullanici, $sifre, $veritabani);

if (!$baglanti) {
    die("Veritabani baglantisi basarisiz!");
}

